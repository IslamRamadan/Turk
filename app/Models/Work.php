<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model 
{

    protected $table = 'works';
    public $timestamps = true;
    protected $fillable = array('icon', 'title_en', 'title_ar', 'content_en', 'content_ar', 'type');

}