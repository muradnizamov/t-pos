<?php

namespace App\Http\Controllers;

use App\Current;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function retail ()
    {
    	
    		return view('index2');
    }

    public function current ()
    {
    	$currents = Current::all();
    	return view('current')->with('currents', $currents);
    }

    

    public function functionname3 ()
    {
    	
    }
}
