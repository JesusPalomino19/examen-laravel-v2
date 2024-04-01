<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuidadorController extends Controller
{
    public function index()
    {
        $cuidadores = Cuidador::all();
        return response()->json($cuidadores);
    }

    public function show(Cuidador $cuidador)
    {
        return response()->json($cuidador);
    }

    public function store(Request $request)
    {
        $cuidador = Cuidador::create($request->all());
        return response()->json($cuidador, 201);
    }

    public function update(Request $request, Cuidador $cuidador)
    {
        $cuidador->update($request->all());
        return response()->json($cuidador, 200);
    }

    public function destroy(Cuidador $cuidador)
    {
        $cuidador->delete();
        return response()->json(null, 204);
    }
}
