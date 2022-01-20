<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BasicCategory extends Model
{
    protected $table = 'basic_categories';
    protected $fillable = [
        'name_ar', 'name_en', 'image_url'
    ];




    public function products(){
        return $this->hasMany('App\Models\Product' , 'basic_category_id' , 'id');
    }
}
