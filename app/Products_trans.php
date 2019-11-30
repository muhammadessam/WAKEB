<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products_trans extends Model
{
    protected $table = 'products_trans';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
