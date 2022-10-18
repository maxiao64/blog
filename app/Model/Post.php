<?php

namespace App\Model;

use App\Traits\SerializeDate;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SerializeDate;

    protected $fillable = [
        'title',
        'body',
        'cate_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }
}
