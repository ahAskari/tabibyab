<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function insert(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->content;
        $comment->doctor_id = $request->doctor_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        return back();
    }
}
