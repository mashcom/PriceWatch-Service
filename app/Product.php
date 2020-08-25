<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function history(){
        return $this->hasMany("App\ProductHistory","product_id","id");
    }
}
