<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;


class Inspection extends Model
{

    public function inspector(){
        return $this->hasOne('App\User','id','user_id');
    }

    public function organisation(){
        return $this->hasOne('App\Organisation','id','organisation_id');
    }
}
