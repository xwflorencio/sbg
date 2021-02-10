<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
	protected $table = "player";
	
	protected $fillable = ['name','tournament_id'];
	
	public function tournament(){
		
		return $this->belongsTo('App\Tournament');
		
	}
	
	public function matches(){
		
		return $this->hasMany('App\Match');
		
	}
}
