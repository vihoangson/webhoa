<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Role extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }

}
