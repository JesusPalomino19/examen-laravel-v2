<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        $actividades = Actividad::all();
        return response()->json($actividades);
    }

    public function show(Actividad $actividad)
    {
        return response()->json($actividad);
    }

    public function store(Request $request)
    {
        $actividad = Actividad::create($request->all());
        return response()->json($actividad, 201);
    }

    public function update(Request $request, Actividad $actividad)
    {
        $actividad->update($request->all());
        return response()->json($actividad, 200);
    }

    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return response()->json(null, 204);
    }
}
