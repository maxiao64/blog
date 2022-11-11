<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends BaseModel
{
    use SoftDeletes;

    const STATUS_WAIT = 0;
    const STATUS_SUCCESS = 1;
    const STATUS_FAIL = 2;

    const STATUS_TEXT = [
        self::STATUS_WAIT => '待审核',
        self::STATUS_SUCCESS => '审核通过',
        self::STATUS_FAIL => '审核失败',
    ];

    protected $fillable = [
        'post_id',
        'content',
        'from_uid',
        'from_username',
        'to_uid',
        'to_username',
        'status',
    ];
}
