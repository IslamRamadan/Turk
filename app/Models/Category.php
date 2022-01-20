<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';
    public $timestamps = true;
    protected $fillable = array('name_en', 'name_ar', 'content_en', 'content_ar','title_en','title_ar','img'
,'section1_en'
,'section1_ar'
,'section2_img'
,'section2_title_ar'
,'section2_title_en'
,'section2_content_en'
,'section2_content_ar'
,'background_img'

);

    public function categories_images()
    {
        return $this->hasMany('App\Models\CategoryImg');
    }



}
