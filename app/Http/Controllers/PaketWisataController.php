<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function index()
    {
        return response()->json(PaketWisata::all());
    }

    public function show($id)
    {
        return response()->json(PaketWisata::find($id));
    }

    public function store(Request $request)
    {
        $paketWisata = PaketWisata::create($request->all());
        return response()->json($paketWisata, 201);
    }

    public function update(Request $request, $id)
    {
        $paketWisata = PaketWisata::findOrFail($id);
        $paketWisata->update($request->all());
        return response()->json($paketWisata, 200);
    }

    public function destroy($id)
    {
        PaketWisata::destroy($id);
        return response()->json(null, 204);
    }
}

