<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UseCase_trans extends Model
{
    protected $table = 'use_cases_trans';
    protected $fillable = ['title', 'description', 'challenges', 'opportunities', 'why_wakeb', 'lang_id'];

    public function useCase(){
        return $this->belongsTo(UseCase::class, 'use_case_id', 'id');
    }
}
