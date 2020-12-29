<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{


protected $fillable = [
        'title', 'price',
    ];


    public function categorys()
    {
    return $this->belongsTo('App\Categorys');
    }
}
