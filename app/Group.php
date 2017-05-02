<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use League\Flysystem\Exception;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Group extends Model
{
    protected $fillable = ['name'];
    use Sluggable, SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable() {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function parent()
    {
        return $this->belongsTo('App\Group', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Group', 'parent_id');
    }

    public function post()
    {
        return $this->belongsToMany('App\Post')
                    ->withTimestamps();
    }

}
