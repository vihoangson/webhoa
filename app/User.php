<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role() {
        return $this->belongsTo( 'App\Role', 'foreign_key', 'role_id' );
    }

    public function user_info() {
        return $this->hasOne( 'App\UserInfo', 'user_id' );
    }

    public function store() {
        return $this->belongsToMany( 'App\Store' )
                    ->withTimestamps();
    }
}
