<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ristorante;

class RistoranteController extends Controller
{
    public function index ()
    {
        $ristorante = Ristorante::findOrFail(1);

        return view('admin.ristorante.index', compact('ristorante'));
    }

    public function edit ()
    {
        $ristorante = Ristorante::findOrFail(1);

        return view('admin.ristorante.edit', compact('ristorante'));
    }

    public function update (Request $request, Ristorante $ristorante){
        // validate
        $validatedData = $request->validate([
            'description' => ['required', 'string'],
            'seo_title' => ['required', 'string', 'max:255'],
            'seo_description' => ['required', 'string', 'max:255'],
            'seo_keywords' => ['required', 'string', 'max:255'],
        ]);

        // save
        $ristorante->update($validatedData);

        // return to index
        return redirect('admin/ristorante');
    }
}
