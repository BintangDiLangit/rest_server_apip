<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return response()->json([
            'message'  => 'List All Kategori',
            'data' => $kategoris
        ], 200);
    }

    public function store(Request $request)
    {
        $data = Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);
        return response()->json([
            'message'  => 'Kategori Berhasil Ditambahkan',
            'data' => $data
        ], 200);
    }
    public function update(Request $request, $id)
    {

        $data = Kategori::find($id);
        $data->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return response()->json([
            'message'  => 'Kategori Berhasil Diupdate',
            'data' => $data
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kategori::find($id);
        $data->delete();
        return response()->json([
            'message'  => 'Kategori Berhasil Dihapus',
        ], 200);
    }
}