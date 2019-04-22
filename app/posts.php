<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    public function comments(){
    	return $this->hasMany('App\comments');
    }

     public function like(){
    	return $this->belongsTo('App\likes');
    }
     public function user(){
    	return $this->belongsTo('App\User');
    }
}
