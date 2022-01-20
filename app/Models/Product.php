<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $fillable = [
        'title_en'  , 'title_ar' , 'description_en','description_ar',
        'appearance','price','img',
    ];
    protected $guarded=[];


    public function category(){
        return $this->belongsTo('App\Category' , 'category_id' , 'id');
    }


}
