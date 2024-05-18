<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use PDF;
class OrderController extends Controller
{
    public function index()
    {
        $order = Order::where('status', '0')->get();
        return view('Admin.orders.index' , compact('order'));
    }
    public function indext2()
    {

       $order = Order::where('status', '0')->get();


   return view('tailor.orders.index2', compact('order'));

   }
   public function indext3()
    {

       $order = Order::where('status', '0')->get();


   return view('tailor.orders.index3', compact('order'));

   }
   public function indext4()
    {

       $order = Order::where('status', '0')->get();


   return view('tailor.orders.index4', compact('order'));

   }
   public function indext5()
    {

       $order = Order::where('status', '0')->get();


   return view('tailor.orders.index5', compact('order'));

   }
    public function createPDF()
    {

        $orders = Order::where('status','0')->get();

        $data = $orders->toArray();

        $pdf = PDF::loadView('Admin.orders.pdf', ['order' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('pdf_file.pdf');
    }

    public function prevorderPDF()
    {

        $orders = Order::where('status','1')->get();

        $data = $orders->toArray();

        $pdf = PDF::loadView('Admin.orders.pdf', ['order' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('pdf_file.pdf');
    }
    
    public function view($id)
    {
        $order = Order::where('id',$id)->first();
        return view('Admin.orders.view' , compact('order'));
    }

    public function updateOrder(Request $request , $id)
    {
        $order = Order::find($id);
        // echo $id;
        $ordstatus = $request->input('order_status');
        // echo $ordstatus;
        $order->status=$ordstatus;
        // $order->status=$ordstatus;
        $order->save();

        return redirect('orders')->with('status','Order Status Updated Successfully');
    }
    public function orderHistory()
    {
        $order = Order::where('status', '1')->get();
        return view('Admin.orders.completedOrders' , compact('order'));
    }

    public function indext()
     {

        $order = Order::where('status', '0')->get();
    //     $all=OrderItem::all();
    //     $id=$all->prod_id->get();
    // $all = OrderItem::all();
    // $matchingOrders = [];

    // foreach ($all as $item) {
    //     $id = $item->prod_id;
    //     $orders = Product::where('id', $id)->first();

    //     if ($orders->cate_id == Auth::id()) {
    //         $order[] = $orders;
    //         echo ($order);
    //     }

    // }

    return view('tailor.orders.index', compact('order'));


    // return view('tailor.orders.index' , compact('order'));
        // $order = Order::where('status', '0')->get();
        // $oid=Auth::id();
        // echo $oid;
        // $order = Order::where('id',$oid)
        //     ->where('status','0')
        //     ->get();
        // return view('tailor.orders.index' , compact('order'));
    }
    public function viewt($id)
    {
        $order = Order::where('id',$id)->first();
        return view('tailor.orders.view' , compact('order'));
    }

    public function updateOrdert(Request $request , $id)
    {
        $order = Order::find($id);
        echo $id;
        echo $order;
        // $order->status = $request->input('order_status');
        // $order->update();
        // return view('orders')->with('status','Order Status Updated Successfully');
    }
    public function orderHistoryt()
    {
        $oid=OrderItem::where('cat_id',Auth::id())->pluck('order_id');
        $order = Order::where('id',$oid)
        ->where('status','1')
        ->get();
        return view('tailor.orders.completedOrders' , compact('order'));
    }
    public function tailorgeneratePdf()
    {
        $oid=OrderItem::where('cat_id',Auth::id())->pluck('order_id');
        $orders =  Order::where('id',$oid)
        ->get();

        $data = $orders->toArray();
        $pdf = PDF::loadView('tailor.orders.pdf', ['order' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('pdf_file.pdf');
    }
    public function generatePdf()
    {
        $orders = Order::all();

        $data = $orders->toArray();

        $pdf = PDF::loadView('Admin.orders.pdf', ['order' => $data])->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download('pdf_file.pdf');
    }
}
