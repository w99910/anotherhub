<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestEloquent extends Controller
{
	public function __construct(){
      $this->middleware('auth');
	}
    public function __invoke(){

    	// return view('TestingEloquent');
   abort('404','Not Found Page');
    }

}
