<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{

    use SoftDeletes;
    protected $with = ['trans', 'trans_lang'];

    protected $table = 'slider';


    public function trans()
    {
        return $this->hasMany(Slider_trans::class, 'slider_id', 'id');
    }

    public function trans_lang()
    {
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        return $this->hasOne(Slider_trans::class, 'slider_id', 'id')->where('lang_id', $lang_id);
    }

}
