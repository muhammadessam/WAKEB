<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider_trans extends Model
{
    protected $table = 'slider_trans';
    protected $guarded = [];

    public function slider()
    {
        return $this->belongsTo(Slider::class, 'slider_id', 'id');
    }


}
