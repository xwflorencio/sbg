<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
	protected $table = "match";
	
	protected $fillable = ['player1_score','player2_score','tournament_id','player1_id','player2_id'];

	public function tournament(){
		
		return $this->belongsTo('App\Tournament');
		
	}
	
	public function player1(){
		
		return $this->belongsTo('App\Player');
		
	}
	
	public function player2(){
		
		return $this->belongsTo('App\Player');
		
	}

}
