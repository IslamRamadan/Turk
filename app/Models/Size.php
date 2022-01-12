<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model 
{

    protected $table = 'sizes';
    public $timestamps = true;
    protected $fillable = array('name', 'item_id',"qut");

    public function colors()
    {
        return $this->hasMany('App\Models\Color');
    }
   
}