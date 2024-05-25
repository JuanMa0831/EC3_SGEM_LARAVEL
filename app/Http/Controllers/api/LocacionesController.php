<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Locaciones;
use Illuminate\Http\Request;

class LocacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Locaciones::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $locacion = Locaciones::create($request->all());
        return response()->json($locacion, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Locaciones::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $locacion = Locaciones::findOrFail($id);
        $locacion->update($request->all());
        return response()->json($locacion, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $locacion = Locaciones::findOrFail($id);
        $locacion->delete();
        return response()->json(null, 204);
    }
}
