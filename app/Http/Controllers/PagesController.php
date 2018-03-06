<?php

namespace App\Http\Controllers;

use App\Current;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function current ()
    {
    	$currents = Current::all();
    	return view('current')->with('currents', $currents);
    }

    public function functionname2 ()
    {
    	
    }

    public function functionname3 ()
    {
    	
    }
}
