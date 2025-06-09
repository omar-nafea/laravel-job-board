<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Post extends Model
{
    use HasUuids;

    protected $primaryKey = 'id'; // The primary key associated with the table
    protected $keyType = 'string'; // The data type of the primary key
    public $incrementing = false; // Indicates if the IDs are auto-incrementing

    /*
    // Manually handled UUID generation (now replaced by HasUuids trait)
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
    */
    protected $table = 'post'; // The table associated with the model

    //fillable is used to specify which attributes should be mass assignable
    // In this case, we are allowing the 'title' and 'content' attributes to be mass assignable
    protected $fillable = ['title', 'body', 'published', 'author'];

    // guarded is used to specify which attributes should not be mass assignable
    // In this case, we are not guarding any attributes, meaning all attributes are mass assignable
    protected $guarded = ['id'];
    // The table associated with the model

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
}
