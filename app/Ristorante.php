<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ristorante extends Model
{
    protected $table = 'ristorante';

    protected $fillable = ['description', 'seo_title', 'seo_description', 'seo_keywords'];

    public $timestamps = false;
}
