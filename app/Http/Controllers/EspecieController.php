<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecieController extends Controller
{
    public function index()
    {
        $especies = Especie::all();
        return response()->json($especies);
    }

    public function show(Especie $especie)
    {
        return response()->json($especie);
    }

    public function store(Request $request)
    {
        $especie = Especie::create($request->all());
        return response()->json($especie, 201);
    }

    public function update(Request $request, Especie $especie)
    {
        $especie->update($request->all());
        return response()->json($especie, 200);
    }

    public function destroy(Especie $especie)
    {
        $especie->delete();
        return response()->json(null, 204);
    }
}
