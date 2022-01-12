<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model 
{

    protected $table = 'colors';
    public $timestamps = true;
    protected $fillable = array('item_id', 'name',"size_id","num","activity","size","name_en");
	public function item()
    {
        return $this->belongsTo(Item::class, 'item_id', 'id'); 
	
	}
public function size()
    {
        return $this->belongsTo(Size::class, 'size_id', 'id'); 
	
	}

}