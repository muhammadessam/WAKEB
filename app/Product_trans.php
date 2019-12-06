<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_trans extends Model
{
    protected $table = 'types_trans';
    protected $fillable = [
        'name', 'description', 'lang_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'type_id', 'id');
    }

}
