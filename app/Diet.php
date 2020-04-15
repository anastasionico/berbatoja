<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    protected $fillable = ['name'];

    public function ristoranteDish()
    {
        return $this->hasMany('App\RistoranteDish');
    }
}
