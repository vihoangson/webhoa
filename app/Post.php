<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Post extends Model {
    protected $fillable = [ 'title', 'content', 'main_img' ];
    use Sluggable, SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    /**
     * Thay đổi giá trị trước khi lưu xuống db
     *
     * @param $slug
     */
    public function setSlugAttribute( $slug ) {
        $this->attributes['slug'] = $slug;
    }

    public function group() {
        return $this->belongsToMany( 'App\Group' )
                    ->withTimestamps();
    }
}
