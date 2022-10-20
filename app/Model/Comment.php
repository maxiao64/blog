<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'content',
        'from_uid',
        'from_username',
        'to_uid',
        'to_username'
    ];
}
