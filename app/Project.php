<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


	protected $guarded = [];
	public function type(){
		return $this->belongsTo(Type::class);
	}

}
