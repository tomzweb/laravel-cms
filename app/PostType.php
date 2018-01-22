<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'content',
        'is_active'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
