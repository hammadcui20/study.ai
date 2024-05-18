<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\size;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        // $sizes=size::all();
        return view('Admin.product.index' , compact('products'));
    }
    public function add()
    {
        $category = Category::all();
        return view('Admin.product.add', compact('category'));
    }

    public function insert(Request $request )
    {
        $product = new Product();
        if($request->hasFile('image'))
        {
            $file =  $request->File('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('upload/product',$fileName);
            $product->image = $fileName;
        }
        
        $product->cate_id = $request->input('cate_id');
        $product->type = $request->input('product_category');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status')   == True ? '1' : '0';
        $product->trending = $request->input('trending')  == True ? '1' : '0';
        $product->weight = $request->input('weight');
        $product->dimensions = $request->input('dimensions');
        $product->meta_keyword = $request->input('meta_keyword');
        // $product->meta_description = $request->input('meta_description');

        $product->save();
        return redirect('/productss')->with('status',"Product Added Successfully");
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('Admin.product.edit',compact('product'));
    }

    public function update(Request $request ,  $id)
    {
        $product = Product::find($id);
        if($request->hasFile('image'))
        {
            $path  = 'upload/product/'.$product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file =  $request->File('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('upload/product',$fileName);
            $product->image = $fileName;
        }
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status')   == True ? '1' : '0';
        $product->trending = $request->input('trending')  == True ? '1' : '0';
        // $product->meta_title = $request->input('meta_title');
        $product->meta_keyword = $request->input('meta_keyword');
        // $product->meta_description = $request->input('meta_description');
        
        $product->update();
        return redirect('/productss')->with('status',"Product Updated Successfully");
    }

    public function delete($id )
    {
        $product = Product::find($id);
        if($product->image)
        {
            $path  = 'upload/product/'.$product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $product->delete();
        return redirect('/products')->with('status',"Product deleted Successfully");
    }
    public function indext()
    {
        $products = Product::where('cate_id',Auth::id())->get();
        return view('tailor.product.index',compact('products'));
    }
    public function addt()
    {
        $category = Auth::id();
        return view('tailor.product.add');
    }
    public function editt($id)
    {
        $product = Product::find($id);
        return view('tailor.product.edit',compact('product'));
    }


}
