<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Basket;
use App\Retail;

class PageController extends Controller
{
    public function index()
    {
    	return view('index',['basket'=>Basket::where('sp_satisno', function($query){
		    $query->select('st_id')
		    ->from(with(new Retail)->getTable())
		    ->where('st_durum', 'A')
		    ->orderBy('st_id', 'desc')
		    ->first();
		})->get() ]); //['basket' => Basket::where('sp_satisno',11)->orderBy('sp_no', 'desc')->get()]);
    }
}
