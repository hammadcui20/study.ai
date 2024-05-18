<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassRoom extends Controller
{
    public function ClassRoomIndex(Request $req)
    {
        $classroom=ClassRoom::where('user_id',auth()->user()->id)->get();
    }
    public function ClassRoomCreate(Request $req)
    {
        $classroom=new ClassRoom;
        $classroom->owner_id=Auth()->user()->id;
        $classroom->title=$req->title;
        $classroom->postdec=$req->postdec;
        $classroom->postmed=$req->postmed;
        $classroom->save();
    }
    public function ClassRoomJoin(Request $req,$id)
    {
        $classroom=ClassRoom::find($id);
        $classroom->student_id=Auth()->user()->id;
        $classroom->save();
    }
    public function StdPosts(reqeust $req)
    {
        $post=new Posts;
        $post->titl=$req->title;
        $post->desp=$req->desp;
        $post->file=$req->file;
        $post->privacy=$post->privacy;
        if($req->hasfile('file'))
        {
            $file=$req->file('file');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/posts/',$filename);
            $post->file=$filename;
        }
        $post->save();
    }
    public function meeting(Request $req)
    {
        $meeting=new Meeting;
        $meeting->title=$req->title;
        $meeting->desp=$req->desp;
        $meeting->date=$req->date;
        $meeting->time=$req->time;
        $meeting->link=$req->link;
        $meeting->save();
    }

}
