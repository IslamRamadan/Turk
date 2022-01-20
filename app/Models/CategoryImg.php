<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryImg extends Model
{

    protected $table = 'categories_images';
    public $timestamps = true;
    protected $fillable = array('category_id','img');

    public function category()
    {
        return $this->belongsTo('Category');
    }

}
