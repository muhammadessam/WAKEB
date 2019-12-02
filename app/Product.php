<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['img_url', 'user_id'];

    protected $primaryKey = 'id';


    public function product_trans()
    {
        return $this->hasMany(Products_trans::class, 'product_id', 'id');
    }
}
