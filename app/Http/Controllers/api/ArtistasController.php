<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Artistas;
use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Artistas::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artista = Artistas::create($request->all());
        return response()->json($artista, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Artistas::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artista = Artistas::findOrFail($id);
        $artista->update($request->all());
        return response()->json($artista, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artista = Artistas::findOrFail($id);
        $artista->delete();
        return response()->json(null, 204);
    }
}
