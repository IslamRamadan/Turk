<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model 
{

    protected $table = 'colors';
    public $timestamps = true;
    protected $fillable = array('item_id', 'name',"size_id","num","activity");

}