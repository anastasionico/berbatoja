<?php

namespace App\Http\Controllers;

use App\Diet;
use Illuminate\Http\Request;

class DietsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diets = Diet::all();

        return view('admin.diete.index', compact('diets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.diete.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Diet::create(request()->validate([
            'name' => ['required', 'string', 'max:255'],
        ]));

        return redirect('/admin/diete');
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
     * @param  Diet $diet
     * @return \Illuminate\Http\Response
     */
    public function edit(Diet $diet)
    {
        return view('admin/diete/edit', compact('diet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Diet $diet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diet $diet)
    {
        $diet->update(request()->validate([
            'name' => ['required', 'string', 'max:255'],
        ]));

        return redirect('/admin/diete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Diet $diet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diet $diet)
    {
        $diet->delete();

        return redirect('/admin/diete');
    }
}
