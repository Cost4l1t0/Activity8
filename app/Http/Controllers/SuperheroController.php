<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    // 1. Muestra la lista de todos los superhéroes
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    // 2. Muestra el formulario para crear uno nuevo
    public function create()
    {
        return view('superheroes.create');
    }

    // 3. Guarda el nuevo superhéroe en la base de datos
    public function store(Request $request)
    {
        // Validamos que los campos obligatorios vengan llenos
        $request->validate([
            'real_name' => 'required',
            'hero_name' => 'required',
            'photo_url' => 'required',
        ]);

        Superhero::create($request->all());
        return redirect()->route('superheroes.index');
    }

    // 4. Muestra los detalles completos de un solo superhéroe
    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    // 5. Muestra el formulario para editar un superhéroe existente
    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    // 6. Actualiza los datos editados en la base de datos
    public function update(Request $request, Superhero $superhero)
    {
        $request->validate([
            'real_name' => 'required',
            'hero_name' => 'required',
            'photo_url' => 'required',
        ]);

        $superhero->update($request->all());
        return redirect()->route('superheroes.index');
    }

    // 7. Elimina al superhéroe
    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }
}