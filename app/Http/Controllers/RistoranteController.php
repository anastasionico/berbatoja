<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RistoranteController extends Controller
{
    public function index ()
    {
        return view('admin.ristorante.index');


    }
}
