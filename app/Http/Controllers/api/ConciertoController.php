<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\support\Facades\DB;
use App\Models\Conciertos;
use Illuminate\Http\Request;

class ConciertoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conciertos = DB::table('conciertos')-> get();
        return json_encode(['conciertos'=> $conciertos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $conciertos = Conciertos::create($request->all());
        return response()->json($conciertos, 201);
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
        $conciertos = Conciertos::findOrFail($id);
        $conciertos->update($request->all());
        return response()->json($conciertos, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $conciertos = Conciertos::findOrFail($id);
        $conciertos->delete();
        return response()->json(null, 204);
    }
}
