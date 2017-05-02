<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Post extends Model {
    protected $fillable = [ 'title', 'content', 'main_img', 'summary','active' ];
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

    public function getDateFormatedAttribute() {
        $date  = Carbon::createFromFormat( 'Y-m-d H:i:s', $this->attributes['updated_at'] );
        return $date->format('d/m/Y');
    }

    public function group() {
        return $this->belongsToMany( 'App\Group' )
                    ->withTimestamps();
    }
}
