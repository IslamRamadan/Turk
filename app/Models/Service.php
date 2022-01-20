<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = array('name_en', 'name_ar', 'content_en', 'content_ar','title_en','title_ar','category_id','img'
,'section1_en'
,'section1_ar'
,'section2_img'
,'section2_title_ar'
,'section2_title_en'
,'section2_content_en'
,'section2_content_ar'
,'background_img'

);

    public function services_images()
    {
        return $this->hasMany('App\Models\ServiceImg');
    }



}
