<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Features_trans extends Model
{
    protected $table = 'features_trans';
    protected $fillable = ['name', 'description', 'lang_id'];

    public function feature()
    {
        return $this->belongsTo(Feature::class, 'feature_id', 'id');
    }


}
