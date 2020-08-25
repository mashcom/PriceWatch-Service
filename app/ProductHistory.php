<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductHistory extends Model
{
    protected $table="product_history";

    public function organisation(){
        return $this->hasOne("App\Organisation","id","organisation_id");
    }
}
