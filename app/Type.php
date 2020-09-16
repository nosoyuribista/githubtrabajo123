<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function project(){
    	return $this->hasMany(Project::class);
    }
}
