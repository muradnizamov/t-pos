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

    

    public function ajax()
    {
    		$task1 = $_POST['task'];
	$message1 = $_POST['comment'];
	$id1 = $_POST['userID'];
             return view('ajax.ajax')>with('task2', $task1);

    }
}
