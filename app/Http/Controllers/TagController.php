<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    function index()
    {
        $data = Tag::all();
        // This will return all posts from the database 
        // Get all of the models from the database.

        // Pass data to the view
        return view('tags.index', ['tags' => $data, "pageTitle" => "Tags"]);
    }
    function create()
    {
        Tag::create([
            'title' => 'Software Development',
        ]);
        return redirect('/tags');
    }

    function testManyToMany()
    {
        // $post1 = Post::find(1);
        // $post4 = Post::find(4);

        // $post1->tags()->attach([1, 2]); // Attaching tags with IDs 1 and 2 to post 1
        // $post4->tags()->attach([2]); // Attaching tags with ID 2 to post 4

        $tag = Tag::find(2); // Find the tag with ID 1
        $tag->posts()->attach([1, 4]); // Attach posts with IDs 1 and 4 to the tag
        // Alternatively, you can use the sync method to attach and detach tags
        // $tag->posts()->sync([1, 4]); // This will attach posts 1 and 4, and detach any other posts that were previously attached
        // return response()->json(['post1' => $post1->tags]);
        return response()->json([
            'title' => $tag->title,
            'post' => $tag->posts
        ]);

    }
}
