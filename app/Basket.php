<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
	protected $table = 'tbsepet';
	public $timestamps = false;
	protected $fillable = ['sp_satisno', 'sp_urunno', 'sp_urunkod', 'sp_urunadi', 'sp_maliyet', 'sp_fiyat', 'sp_kdv', 'sp_adet', 'sp_iade', 'sp_birim', 'sp_carpan', 'sp_tutar', 'sp_urunparabirimi', 
	'sp_urunfiyat', 'sp_urunkur', 'sp_parabirimi', 'sp_depo', 'sp_urunsira', 'sp_aciklama', 'sp_satici'];
}