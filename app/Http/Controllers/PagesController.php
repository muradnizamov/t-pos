<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;
use App\Current;

class PagesController extends Controller
{
	public function addToBasket (Request $request)
    {
        $basket = new Basket();
        $basket->sp_satisno = $request->crkod;
        $basket->save();
        return response()->json(['success'=>'Data is successfully added']);
    }

    public function current ()
    {
    	$currents = Current::all();
    	return view('current')->with('currents', $currents);
    }

    

    public function functionname ()
    {
    		

    }
}
