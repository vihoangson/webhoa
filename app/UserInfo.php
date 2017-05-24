<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserInfo extends Authenticatable {
    protected $table = 'user_info';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

}
