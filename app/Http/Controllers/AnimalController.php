<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animales = Animal::all();
        return response()->json($animales);
    }

    public function show(Animal $animal)
    {
        return response()->json($animal);
    }

    public function store(Request $request)
    {
        $animal = Animal::create($request->all());
        return response()->json($animal, 201);
    }

    public function update(Request $request, Animal $animal)
    {
        $animal->update($request->all());
        return response()->json($animal, 200);
    }

    public function destroy(Animal $animal)
    {
        $animal->delete();
        return response()->json(null, 204);
    }
}
