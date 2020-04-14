<?php

namespace App\Http\Controllers;

use App\Allergie;
use Illuminate\Http\Request;

class AllergiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allergies = Allergie::all();

        return view('admin.allergies.index', compact('allergies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.allergies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Allergie::create(request()->validate([
            'name' => ['required', 'string', 'max:255'],
        ]));

        return redirect('/admin/allergie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Allergie $allergy
     * @return \Illuminate\Http\Response
     */
    public function edit(Allergie $allergy)
    {

        return view('admin/allergies/edit', compact('allergy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Allergie $allergy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allergie $allergy)
    {
        $allergy->update(request()->validate([
            'name' => ['required', 'string', 'max:255'],
        ]));

        return redirect('/admin/allergie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Allergie $allergy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allergie $allergy)
    {
        $allergy->delete();

        return redirect('/admin/allergie');
    }
}
