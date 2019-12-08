<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UseCase extends Model
{
    use SoftDeletes;
    protected $table = 'use_cases';
    protected $fillable = ['img_url', 'user_id','solution_id'];
    protected $with = ['trans', 'trans_lang'];


    public function trans()
    {
        return $this->hasMany(UseCase_trans::class, 'use_case_id', 'id');
    }

    public function trans_lang()
    {
        $lang_id = Lang::where('lang', session()->get('locale'))->first()->id;
        return $this->hasOne(UseCase_trans::class, 'use_case_id', 'id')->where('lang_id', $lang_id);
    }


    public function solution()
    {
        return $this->belongsTo(Solution::class, 'solution_id', 'id');
    }


}
