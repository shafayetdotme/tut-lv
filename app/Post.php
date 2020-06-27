<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];

    /**
     * Get the author of the post.
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
