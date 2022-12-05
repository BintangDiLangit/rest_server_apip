<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return response()->json([
            'message'  => 'List All Barang',
            'data' => $barangs
        ], 200);
    }

    public function store(Request $request)
    {
        $data = Barang::create([
            'nama_kategori' => $request->nama_kategori
        ]);
        return response()->json([
            'message'  => 'Barang Berhasil Ditambahkan',
            'data' => $data
        ], 200);
    }
    public function update(Request $request, $id)
    {

        $data = Barang::find($id);
        $data->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return response()->json([
            'message'  => 'Barang Berhasil Diupdate',
            'data' => $data
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Barang::find($id);
        $data->delete();
        return response()->json([
            'message'  => 'Barang Berhasil Dihapus',
        ], 200);
    }
}