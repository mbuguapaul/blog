<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    public function posts(){
    	return $this->belongsTo('App\posts');
    }
}
