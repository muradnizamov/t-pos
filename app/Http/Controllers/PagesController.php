<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Current;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function basket ()
    {
        return view('index');
    }

    public function addToBasket (Request $request)
    {
        $basket = new Basket;
        $basket->sp_satisno = 6;
        $basket->sp_urunno = 15;
        $basket->sp_urunkod = 153.003;
        $basket->sp_urunadi = $request->cr_code;
        $basket->sp_maliyet = 15.000000;
        $basket->sp_fiyat = 22.000000;
        $basket->sp_kdv = 0;
        $basket->sp_adet = 1.000000;
        $basket->sp_iade = 0.000000;
        $basket->sp_birim = "ADET";
        $basket->sp_carpan = 1;
        $basket->sp_tutar = 22;
        $basket->sp_urunparabirimi = "TL";
        $basket->sp_urunfiyat = 22.000000;
        $basket->sp_urunkur = 1;
        $basket->sp_parabirimi = "TL";
        $basket->sp_depo = 1;
        $basket->sp_urunsira = 1;
        $basket->sp_aciklama = "asdsa";
        $basket->sp_satici = 0;
        $basket->save();
        return response()->json(['success'=>'Data is successfully added']);
    }

    public function current ()
    {
        $currents = Current::all();
        return view('current')->with('currents', $currents);
    }

}
