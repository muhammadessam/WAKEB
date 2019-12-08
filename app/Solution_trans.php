<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution_trans extends Model
{
    protected $table = 'solution_trans';


    public function solution(){
        return $this->belongsTo(Solution::class, 'solution_id', 'id');
    }
}
