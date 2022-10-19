<?php

namespace App\Model;

use App\Traits\SerializeDate;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SerializeDate;

    const AUTH_TYPE_GITHUB = 1; // github
}
