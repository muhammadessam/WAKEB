<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $table = 'solutions';


    public function solution_trans()
    {
        return $this->hasMany(Solution_trans::class, 'solution_id', 'id');
    }

    public function solution_trans_lang()
    {
        $lang_id = Lang::all()->where('lang', session()->get('locale'))->first()->id;
        return $this->hasMany(Solution_trans::class, 'solution_id', 'id')->where('lang_id', $lang_id);
    }
}
