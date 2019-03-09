<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class commentController extends Controller
{

    public function index() 
    {
        return view('comment');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'comment' => 'required',
        ]);

        $name = $request->post('name');
        $comment = $request->post('comment');

        $comments = new Comments;
        $comments->name = $name;
        $comments->comment = $comment;
    
        $comments->save();

        return back()->with('status', 'บันทึกข้อมูลเรียบร้อย');
    }

}
