<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Product extends Model
{

    use SoftDeletes;

    protected $table = 'types';

    protected $with = ['product_trans_lang', 'product_trans','svgs'];

    protected $fillable = ['img_url', 'user_id', 'type'];

    protected $primaryKey = 'id';

    public function path(){
        return url("/products/".Str::slug($this->product_trans->where('lang_id', 2)->first()->name, '-'));
    }


    public static function all($columns = ['*'])
    {
        return parent::all($columns)->where('type', 'product');
    }

    public function product_trans()
    {
        return $this->hasMany(Product_trans::class, 'type_id', 'id');
    }

    public function product_trans_lang()
    {
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        return $this->hasOne(Product_trans::class, 'type_id', 'id')->where('lang_id', $lang_id);
    }

    public function features()
    {
        return $this->morphMany(Feature::class, 'featurable');
    }

    public function svgs()
    {
        return $this->hasMany(SVGS::class, 'product_id', 'id');
    }


}
