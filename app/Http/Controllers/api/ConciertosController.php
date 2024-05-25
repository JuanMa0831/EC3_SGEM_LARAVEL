<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Conciertos;
use Illuminate\Http\Request;

class ConciertosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Conciertos::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $concierto = Conciertos::create($request->all());
        return response()->json($concierto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Conciertos::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $concierto = Conciertos::findOrFail($id);
        $concierto->update($request->all());
        return response()->json($concierto, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $concierto = Conciertos::findOrFail($id);
        $concierto->delete();
        return response()->json(null, 204);
    }
}
