<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    function index()
    {   
        $data = [
            'candyComments' => Comment::where('comments','LIKE', '%candy%')->get()
        ];
        return view('index',$data);
    }
}
