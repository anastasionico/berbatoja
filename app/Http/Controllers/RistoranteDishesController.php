<?php

namespace App\Http\Controllers;

use App\Diet;
use App\RistoranteDish;
use Illuminate\Http\Request;

class RistoranteDishesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $dishes = RistoranteDish::all();

        return view('admin.ristoranteDishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diets = Diet::all();
        return view('admin.ristoranteDishes.create', compact('diets'));
    }

    public function store(Request $request)
    {
      $validatedData = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'img' => ['required','image','mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'description' => ['required', 'string'],
            'ingredients' => ['required', 'string'],
            'diet_id' => ['required', 'integer'],
        ]);


      $imageName = request()->name . now()->toDateString() .'.'. request()->img->getClientOriginalExtension();
      request()->img->move(public_path('img/ristoranteDishes'), $imageName);
      $validatedData['img'] = $imageName;


      $newRistoranteDish = RistoranteDish::create($validatedData);
      return redirect()->action('RistoranteDishesController@index');
    }
}

