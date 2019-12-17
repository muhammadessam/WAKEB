<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    use SoftDeletes;

    protected $table = 'types';

    protected $with = ['product_trans_lang', 'product_trans'];

    protected $fillable = ['img_url', 'user_id', 'type'];

    protected $primaryKey = 'id';

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


}
