<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
        public function user(){
    	return $this->belongsTo('App\User');
    }
    public function ministry(){
    	return $this->belongsTo('App\Ministry');
    }
     public function applications(){
    	return $this->hasMany('App\Application');
    } 
}
