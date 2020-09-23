<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


	protected $guarded = [];
	//Tipo de proyecto 
	public function type(){
		return $this->belongsTo(Type::class);
	}
	// Usuarios en el proyecto
	public function users(){
    	return $this->belongsToMany(User::class, 'project_user');
    }
    
    public function deleteUser($user_id){
        $this->users()->detach($user_id);
    }


}
