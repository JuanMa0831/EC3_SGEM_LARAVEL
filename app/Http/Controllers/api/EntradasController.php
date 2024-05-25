<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Entradas;
use Illuminate\Http\Request;

class EntradasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Entradas::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $entrada = Entradas::create($request->all());
        return response()->json($entrada, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Entradas::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $entrada = Entradas::findOrFail($id);
        $entrada->update($request->all());
        return response()->json($entrada, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entrada = Entradas::findOrFail($id);
        $entrada->delete();
        return response()->json(null, 204);
    }
}
