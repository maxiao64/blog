<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SerializeDate;

class Category extends Model
{
    use SerializeDate;

    public function posts()
    {
        return $this->hasMany(Post::class, 'id', 'cate_id');
    }
}
