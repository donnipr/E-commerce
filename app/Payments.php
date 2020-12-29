<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
  protected $fillable = [
        'id',
    ];
    protected $guarded = [];

    public function customer()
    {
    return $this->belongsTo('App\Customer');
 }
}
