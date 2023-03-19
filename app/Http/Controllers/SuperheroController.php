<?php

namespace App\Http\Controllers;

use App\Models\superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['Superheros'] = superhero::paginate(5);
        return view('Superhero.index',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Superhero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosHero = request()->except('_token');
        superhero::insert($datosHero);
        return response()->json($datosHero);
    }

    /**
     * Display the specified resource.
     */
    public function show(superhero $superhero)
    {
        return view('Superhero.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hero=superhero::findOrFail($id);
        return view('Superhero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosHero = request()->except('_token','_method');
        superhero::where('id','=', $id)->update($datosHero);

        
        $hero=superhero::findOrFail($id);
        return view('Superhero.edit', compact('hero'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        superhero::destroy($id);
        return redirect('Superhero');
    }
}
