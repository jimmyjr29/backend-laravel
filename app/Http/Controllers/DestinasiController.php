<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        return response()->json(Destinasi::all());
    }

    public function show($id)
    {
        return response()->json(Destinasi::find($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'image|mimes:jpeg,jpg,png|nullable|max:1024', // Contoh validasi gambar (opsional)
            'deskripsi' => 'required',
            'lokasi' => 'required',
        ]);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $input['gambar'] = $request->gambar->store('gambar', 'public');
        }

        $destinasi = Destinasi::create($input);

        return response()->json($destinasi, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'image|mimes:jpeg,jpg,png|nullable|max:1024', // Contoh validasi gambar (opsional)
            'deskripsi' => 'required',
            'lokasi' => 'required',
        ]);

        $destinasi = Destinasi::findOrFail($id);

        $input = $request->all();

        if ($request->hasFile('gambar')) {
            $input['gambar'] = $request->gambar->store('gambar', 'public');
        }

        $destinasi->update($input);

        return response()->json($destinasi, 200);
    }

    public function destroy($id)
    {
        Destinasi::destroy($id);
        return response()->json(null, 204);
    }
}
