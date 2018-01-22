<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title',
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

    /**
     * Relationship to Post Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type()
    {
        return $this->hasOne(PostType::class, 'id', 'post_type_id');
    }

    /**
     * Filter Query by type slug
     *
     * @param $query
     * @param $type
     * @return mixed
     */
    public function scopeWhereTypeIs($query, $type)
    {
        return $query->select('posts.*')
            ->join('post_types', 'posts.post_type_id', '=', 'post_types.id')
            ->where('post_types.slug', $type);
    }
}
