<?php

namespace App\Model;
class Post extends BaseModel
{
    protected $fillable = [
        'title',
        'body',
        'cate_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
