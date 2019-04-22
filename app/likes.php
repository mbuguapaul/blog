<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    //



     public function posts(){
    	return $this->belongsTo('App\posts');
    }
     public function user(){
    	return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'postid','userid',
    ];
}
