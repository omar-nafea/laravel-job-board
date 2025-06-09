<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = 'tag'; // The table associated with the model
    protected $fillable = ['title'];
    protected $guarded = ['id'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags');
    }
}
