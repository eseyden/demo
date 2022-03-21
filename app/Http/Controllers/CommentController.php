<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    function index()
    {   
        $data = [
            'candyComments' => Comment::where('comments','LIKE', '%candy%')->get(),
            'callComments' => Comment::where('comments','LIKE', '%call%')->get(),
            'referComments' => Comment::where('comments','LIKE', '%refer%')->get(),
            'signatureComments' => Comment::where('comments','LIKE', '%sig%')->get(),
        ];
        $data['miscComments'] = Comment::where('comments','NOT LIKE', '%candy%')
            ->where('comments','NOT LIKE', '%call%')
            ->where('comments','NOT LIKE', '%refer%')
            ->where('comments','NOT LIKE', '%sig%')
            ->get();
        return view('index',$data);
    }
}
