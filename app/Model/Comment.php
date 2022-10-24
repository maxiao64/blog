<?php

namespace App\Model;
class Comment extends BaseModel
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
