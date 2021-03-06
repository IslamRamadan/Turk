<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceImg extends Model
{

    protected $table = 'services_images';
    public $timestamps = true;
    protected $fillable = array('service_id','img');

    public function service()
    {
        return $this->belongsTo('Service');
    }

}
