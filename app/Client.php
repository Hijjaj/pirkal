<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'rfc';

    protected $fillable = [
        'name'
    ];


    // This model can generate 1 or N sales
    public function sales() {
        return $this->hasMany('App\Sale', 'sale_id');
    }


}
