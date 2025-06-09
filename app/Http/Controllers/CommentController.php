<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('comments.index', ['comments' => $comments, "pageTitle" => "Comments to Post"]);
    }

    function create(){
        Comment::create([
            'author' => 'Omar Nafea',
            'content' => 'This is the body of the content.',
            'post_id' => 3, // Assuming you want to link this comment to the post with ID 1
        ]);
        return redirect('/comments');
    }
}
