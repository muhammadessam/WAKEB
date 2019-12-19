<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MongoDB\BSON\Type;

class SVGS extends Model
{
    protected $table = 'svgs';

    protected $fillable = ['img_url'];

    public function product()
    {
        return $this->belongsTo(Type::class, 'product_id', 'id')->where('type', 'product');
    }
}
