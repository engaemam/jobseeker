<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
     public function users(){
    	return $this->belongsToMany('App\User');
    }
     public function jobs(){
    	return $this->hasMany('App\Job');
    }    
}
