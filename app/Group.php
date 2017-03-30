<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name'];

    public function parent()
    {
        return $this->belongsTo('App\Group', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Group', 'parent_id');
    }

}
