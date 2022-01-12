<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model 
{

    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = array('name_en', 'name_ar', 'content_en', 'content_ar','title_en','title_ar','type','img');

    public function services_images()
    {
        return $this->hasMany('App\Models\Service_images');
    }



}