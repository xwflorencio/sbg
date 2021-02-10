<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\Player;
use Laracasts\Flash\Flash;
use App\Http\Requests\TournamentRequest;

class TournamentController extends Controller
{
	public function index(){
		
		$tournament = Tournament::orderBy('id','desc')->get();

		$tournament->each( function($tournament){
			$tournament->players;
		});

		//dd($tournament);

		return view('admin.index_tournament')->with('tournament',$tournament);
		//dd('test');
    }
    
    public function create(){
		//dd('esto es create');
		return view('admin.create_tournament');
    }

     public function show($id){
		//dd('esto es show');
		//dd($id);
		$tournament = Tournament::find($id);
		//dd($tournament);
		//$tournament = new Tournament($request->all());
		//return view('admin.bracket_tournament');
		return view('admin.show_tournament')->with('tournament',$tournament);
    }

    public function store(TournamentRequest $request){
		
		$tournament = new Tournament($request->all());
		
		$tournament->save();

    	$players = $request->all()['players'];

    	foreach($players as $player){
    		
    		$team = new Player();
    		$team->name = $player;
    		$team->tournament_id = $tournament->id;
    		$team->save();
    		
    	}
    	
		Flash::success("Tournament created");

		return redirect()->route('tournament.index');

    }

    public function destroy($id){

    	$tournament = Tournament::find($id);
    	//dd($tournament);
    	$tournament->delete();

    	Flash::error('Tournament ' . $tournament->name . ' has been deleted' );

    	return redirect()->route('tournament.index');

    }
    
   

}
