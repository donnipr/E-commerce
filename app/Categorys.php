<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function product()
    {
    	return $this->hasMany('App\Products');
    }
}
