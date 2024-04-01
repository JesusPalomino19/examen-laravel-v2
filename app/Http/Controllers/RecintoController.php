<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecintoController extends Controller
{
    public function index()
    {
        $recintos = Recinto::all();
        return response()->json($recintos);
    }

    public function show(Recinto $recinto)
    {
        return response()->json($recinto);
    }

    public function store(Request $request)
    {
        $recinto = Recinto::create($request->all());
        return response()->json($recinto, 201);
    }

    public function update(Request $request, Recinto $recinto)
    {
        $recinto->update($request->all());
        return response()->json($recinto, 200);
    }

    public function destroy(Recinto $recinto)
    {
        $recinto->delete();
        return response()->json(null, 204);
    }
}
