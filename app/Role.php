<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    


    public function user(){
    	return $this->belongsToMany(User::class);
    }


    public function user_project(){
    	return $this->belongsToMany(User::class,'project_user');
    }
}
