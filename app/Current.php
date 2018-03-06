<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Current extends Model
{
	protected $table = 'tbcari';

    protected $fillable = [
        'cr_kod', 'cr_adi', 'cr_adres', 'cr_tel'
    ];
}
