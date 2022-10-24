<?php

namespace App\Model;


class Link extends BaseModel
{
     protected $fillable = [
        'name',
        'link',
        'order'
     ];
}
