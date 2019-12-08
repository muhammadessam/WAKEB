<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Service extends Model
{
    use SoftDeletes;

    protected $table = 'types';
    protected $fillable = ['img_url', 'user_id', 'type'];
    protected $with = ['service_trans','service_trans_lang'];

    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('type', 'service');
    }

    public function service_trans()
    {
        return $this->hasMany(Service_trans::class, 'type_id', 'id');
    }

    public function service_trans_lang()
    {
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        return $this->hasMany(Service_trans::class, 'type_id', 'id')->where('lang_id', $lang_id);
    }

    public function features()
    {
        return $this->morphMany(Feature::class, 'featurable');
    }

}
