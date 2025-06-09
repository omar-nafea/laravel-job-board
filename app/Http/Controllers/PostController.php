<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $data = Post::all();
        // This will return all posts from the database 
        // Get all of the models from the database.

        // Pass data to the view
        return view('post.index', ['posts' => $data, "pageTitle" => "Blog Posts"]);
    }

    function create()
    {
        Post::create([
            'title' => 'Post no. twelve',
            'author' => 'Malek Nafea',
            'body' => 'This is the body of the 10.',
            'published' => true,
        ]);
        return redirect('/blog');
    }

    function find($id)
    {
        $post = Post::find($id);
        // Find a model by its primary key.
        if ($post) {
            return view('post.show', ['post' => $post, "pageTitle" => $post->title]);
        } else {
            return view('post.errorPage', ["pageTitle" => "Post Not Found", "id" => $id]);
        }
    }

    function delete($id)
    {
        $post = Post::find($id);
        // Find a model by its primary key.
        if ($post) {
            $post->delete();
            return redirect('/blog');
        } else {
            return view('post.errorPage', ["pageTitle" => "Post Not Found", "id" => $id]);
        }
    }
}
