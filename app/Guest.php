<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['username', 'password', 'email', 'mobileno', 'background'];
}
