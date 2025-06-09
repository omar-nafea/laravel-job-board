<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Comment extends Model
{
    protected $table = 'comment'; // The table associated with the model
    protected $fillable = ['author','content', 'post_id'];
    protected $guarded = ['id'];

    // this function defines the relationship between Comment and Post
    // A comment belongs to a post and a post has many comments
    // and I use this fuction to access the post that the comment belongs to in views
    public function post(){
        return $this->belongsTo(Post::class, 'post_id');
    }
}
