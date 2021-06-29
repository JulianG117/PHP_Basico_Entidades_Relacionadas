<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    protected $table = "customer";
    protected $primaryKey= "CustomerId";
    public $timestamps = false;

    public function compras(){
        return $this-> HasMany('App\Compra', 'CustomerId');
    }
}
