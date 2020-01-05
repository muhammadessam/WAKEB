<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_trans extends Model
{
    protected $table = 'types_trans';
    protected $fillable = [
        'name', 'description', 'lang_id', 'about'
    ];


    public function service()
    {
        return $this->belongsTo(Service::class, 'type_id', 'id')->where('type', 'service');
    }
}
