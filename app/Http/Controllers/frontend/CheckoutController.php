<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\size;
use Illuminate\support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $sizes=size::all();
        $old_cartitem=Cart::where('user_id',Auth::id())->get();
        foreach($old_cartitem as $item)
        {
            if(!Product::where('id',$item->prod_id)->where('qty' , '>=' , $item->prod_qty)->exists())
            {
                $removeItem = Cart::where('user_id',Auth::id())->where('prod_id',$item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartitem=Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout' , compact('cartitem','sizes'));
    }

    public function placeOrder(Request $request)
    {
        $order  = new Order();

     

        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phoneno = $request->input('phoneno');
        $order->address1 = $request->input('address1');
        $order->address2 = $request->input('address2');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->country = $request->input('country');
        $order->pincode = $request->input('pincode');
        $order->size= $request->input('size_id');
        $total = 0;
        $cartitems_total = Cart::where('user_id',Auth::id())->get();
        foreach ($cartitems_total as $prod) {
            $total += $prod->products->selling_price * $prod->prod_qty;
        }
    if($request->hasFile('image'))
            {
                $file =  $request->File('image');
                $ext = $file->getClientOriginalExtension();
                $fileName = time().'.'.$ext;
                $file->move('upload/transaction',$fileName);
                $order->image = $fileName;
            }
        $order->total_price= $total;

        $order->tracking_no = 'od'.rand(1111,9999);
       
        $order->id;
        $order->save();
        $cartitem=Cart::where('user_id',Auth::id())->get();

        foreach($cartitem as $item)
        {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id' => $item->prod_id,
                // 'cat_id' => $item->products->cate_id,
                'qty' => $item->prod_qty,
                'price' => $item->products->selling_price,
            ]);

            $prod  = Product::where('id' , $item->prod_id)->first();
            $prod->qty = $prod->qty - $item->prod_qty;
            $prod->update();
        }

        Cart::destroy($cartitem);
        return redirect('/')->with('status',"Order Placed successfully");
    }
}
