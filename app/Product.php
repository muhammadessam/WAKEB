<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'products';

    public function product_tans()
    {
        $lang = App::getLocale();
        $lang_id = Lang::where('lang', '=', $lang)->first()->id;
        return $this->hasMany(Products_trans::class, 'product_id', 'id')->where('lang_id', '=', $lang_id);
    }
}
