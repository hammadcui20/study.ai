<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class media extends Controller
{
    public function mediaIndex()
    {
        return view('media');
    }
    public function mediaStoreT(Reqest $req)
    {
        $media=new Media;
        $media->user_id=auth()->user()->id;
        $media->title=$req->title;
        $media->desp=$req->desp;
        $media->file=$req->file;
        $media->privacy=$req->privacy;
        if($requeest->hasfile('file'))
        {
            $file=$request->file('file');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/media/',$filename);
            $media->file=$filename;
        }
        $media->save();
    }
        
        
}
