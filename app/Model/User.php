<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SerializeDate;

class User extends Model
{
    use SerializeDate;
}
