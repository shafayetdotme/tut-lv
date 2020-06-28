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

    /**
     * Get the tags of the post.
     */
    public function tags()
    {
        // return $this->belongsToMany('Model_Name', 'Table_Name', 'Foreign_Key_Name', 'Foreign_Key_Name');
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id');
    }
}
