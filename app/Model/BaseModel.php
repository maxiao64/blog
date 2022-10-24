<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SerializeDate;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use SerializeDate, SoftDeletes;
}
