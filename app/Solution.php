<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solution extends Model
{
    use SoftDeletes;

    protected $table = 'solutions';
    protected $with = ['trans_lang', 'trans','useCases'];
    protected $fillable = ['img_url', 'user_id'];
    public function trans()
    {
        return $this->hasMany(Solution_trans::class, 'solution_id', 'id');
    }

    public function trans_lang()
    {
        $lang_id = Lang::all()->where('lang', session()->get('locale'))->first()->id;
        return $this->hasMany(Solution_trans::class, 'solution_id', 'id')->where('lang_id', $lang_id);
    }

    public function useCases(){
        return $this->hasMany(UseCase::class, 'solution_id', 'id');
    }


}
