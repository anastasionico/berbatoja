<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RistoranteDish extends Model
{
    protected $fillable = ['name', 'img', 'description', 'ingredients' , 'diet_id'];

    protected $table = 'ristorante_dishes';

    public function diet()
    {
        return $this->belongsTo('App\Diet');
    }
}
