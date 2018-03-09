<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $table = 'tbsepet';
    public $timestamps = false;
    protected $fillable = ['sp_urunkod'];
}
