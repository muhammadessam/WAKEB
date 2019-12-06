<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_trans extends Model
{
    protected $table = 'types_trans';
    protected $fillable = [
        'name', 'description', 'lang_id'
    ];


    public function service()
    {
        return $this->belongsTo(Service::class, 'type_id', 'id');
    }
}
