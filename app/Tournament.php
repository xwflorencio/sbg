<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    //
	protected $table = "tournament";
	
	protected $fillable = ['name','number_of_player','start','end'];
	
	public function players(){
		
		return $this->hasMany('App\Player');
		
	}
	
	public function matches(){
		
		return $this->hasMany('App\Match');
		
	}
	
}
