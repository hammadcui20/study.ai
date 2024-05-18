<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\size;
use App\Models\Category;

class FrontController extends Controller
{
    public function mainpage()
    {
        $category = category::where('popular','1')->take(15)->get();
        $product = Product::where('trending','1')->take(12)->get();

        return view('frontend.index' , compact('category', 'product'));
    }
    public function category()
    {
        $category = Category::where('status','0')->get();

        $pro = Product::where('type','0')->get();
        if($pro->count() > 3)
        {
            $p_0 = $pro->random(4);
        }
        else
        {
            $p_0 = Product::where('type','0')->get();
        }

        $pro_1 = Product::where('type','1')->get();
        if ($pro_1->count() > 3) 
        {
            $p_1 = $pro_1->random(4);
        }
        else
        {
            $p_1 = Product::where('type','1')->get();
        }
        $pro_2 = Product::where('type','2')->get();
        if($pro_2->count() > 3)
        {
            $p_2 = $pro_2->random(4);
        }
        else
        {
            $p_2 = Product::where('type','2')->get();
        }

        return view('frontend.category' , compact('category','p_0','p_1','p_2'));
    }
    public function viewCategory($slug)
    {
        if(Category::where('slug',$slug)->exists())
        {
            $category = Category::where('slug',$slug)->first();
            $product = Product::where('cate_id',$category->id)->where('status','0')->get();
            return view('frontend.products.index', compact('category','product'));
        }
        else
        {
            return redirect('/')->with('status',"Slug Doesn't exits");
        }
    }
    public function productView($cate_slug  ,$prod_slug )
    {
        $data=size::all();

        if(Category::where('slug',$cate_slug)->exists())
        {
            if(Product::where('slug',$prod_slug)->exists())
            {
                $product = Product::where('slug',$prod_slug)->first();
                return view('frontend.products.view', compact('product','data'));
            }
            else
            {
                return redirect('/')->with('status',"No Such Product Found");
            }
        }
        else
        {
            return redirect('/')->with('status',"No such Category found");
        }
    }
    public function eachProdView($prod_slug)
    {


            if(Product::where('slug',$prod_slug)->exists())
            {
                $product = Product::where('slug',$prod_slug)->first();
                return view('frontend.products.view', compact('product'));
            }
            else
            {
                return redirect('/')->with('status',"No Such Product Found");
            }
    }
    public function searchProducts(Request $request)
    {
        $search_product = $request->product_name;
        if($search_product != "")
        {
            $p_0 = Product::where('name',"LIKE","%$search_product%")->get();
            if($p_0)
            {
                return view('frontend.products',compact('p_0'));
            }
            else
            {
                return redirect()->back()->with("status","No Products Matched your Search");
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    public function allSanitary()
    {
        $p_0 = Product::where('type',"0")->get();
            if($p_0)
            {
                return view('frontend.products' , compact('p_0'));
            }
            else
            {
                return redirect()->back()->with("status","No Products Matched your Search");
            }
    }
    public function allElec()
    {
        $p_0 = Product::where('type',"1")->get();
            if($p_0)
            {
                return view('frontend.products' , compact('p_0'));
            }
            else
            {
                return redirect()->back()->with("status","No Products Matched your Search");
            }
    }
    public function allHardware()
    {
        $p_0 = Product::where('type',"2")->get();
            if($p_0)
            {
                return view('frontend.products' , compact('p_0'));
            }
            else
            {
                return redirect()->back()->with("status","No Products Matched your Search");
            }
    }
}

