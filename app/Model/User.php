<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends \Illuminate\Foundation\Auth\User
{
    protected $fillable=['name','email','utype','status','image','password'];
}
