<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    /**
     * Thay đổi giá trị trước khi lưu xuống db
     *
     * @param $slug
     */
    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = $slug . "_" . time();
    }
}
