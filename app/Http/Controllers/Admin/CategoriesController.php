<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


class CategoriesController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('Admin.category.index', compact('category'));
    }
    public function add()
    {
        return view('Admin.category.add');
    }
    public function insert(Request $request )
    {
        $u_id=0;
        $u=User::count();

        for ($i=0;$i<$u;$i++)
        {
            $u_id++;
        }
        $category = new Category();
        if($request->hasFile('image'))
        {
            $file =  $request->File('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('upload/category',$fileName);
            $category->image = $fileName;
        }
         $u_id=$u_id+20;
         $category->id = $u_id ;

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status')   == True ? '1' : '0';
        $category->popular = $request->input('popular')  == True ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        // $category->meta_keyword = $request->input('meta_keyword');
        // $category->meta_description = $request->input('meta_description');
        $category->save();

        $data = new User();

        $role=2;
        $data->id=$u_id;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $password = 'mumtaz123';
        $data->role_as = $role;
        $hashedPassword = Hash::make($password);
        $data->password = $hashedPassword;
        $data->save();

        return redirect('/categories')->with('status',"Shopkeepers Added Successfully");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('Admin.category.edit',compact('category'));
    }

    public function update(Request $request ,  $id)
    {
        $category = Category::find($id);
        if($request->hasFile('image'))
        {
            $path  = 'upload/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file =  $request->File('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $file->move('upload/category',$fileName);
            $category->image = $fileName;
        }
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status')   == True ? '1' : '0';
        $category->popular = $request->input('popular')  == True ? '1' : '0';
        $category->meta_title = $request->input('meta_title');
        // $category->meta_keyword = $request->input('meta_keyword');
        // $category->meta_description = $request->input('meta_description');

        $category->update();
        return redirect('/categories')->with('status',"Shopkeepers Updated Successfully");
    }

    public function delete($id )
    {
        $category = Category::find($id);
        if($category->image)
        {
            $path  = 'upload/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('/categories')->with('status',"Shopkeepers deleted Successfully");
    }
}
