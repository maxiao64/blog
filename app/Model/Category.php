<?php

namespace App\Model;

class Category extends BaseModel
{
    protected $fillable = [
        'name'
    ];
    
    public function posts()
    {
        return $this->hasMany(Post::class, 'cate_id', 'id');
    }
}
