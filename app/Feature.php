<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Feature extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'featurable_type', 'featurable_id'];
    protected $with = ['features_trans','feature_trans_lang','featurable'];

    public function features_trans()
    {
        return $this->hasMany(Features_trans::class, 'feature_id', 'id');
    }

    public function feature_trans_lang()
    {
        $lang_id = Lang::where('lang', App::getLocale())->first()->id;
        return $this->hasMany(Features_trans::class, 'feature_id', 'id')->where('lang_id', $lang_id);
    }

    public function featurable()
    {
        return $this->morphTo();
    }

}
