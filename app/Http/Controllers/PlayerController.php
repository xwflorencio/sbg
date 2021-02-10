<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function create(){

    	return view('admin.create_player');

    }
}
