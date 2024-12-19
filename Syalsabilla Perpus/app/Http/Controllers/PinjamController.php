<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Anggota;
use App\Models\Buku;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index()
    {
        $pinjams = Pinjam::with(['anggota', 'buku'])->get(); 
        return response()->json($pinjams);
    }

    // Menambahkan data peminjaman baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_anggota' => 'required|exists:anggotas,id',
            'id_buku' => 'required|exists:buku,id',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date|after:tgl_pinjam',
            'denda' => 'nullable|numeric|min:0',
        ]);

        $pinjam = Pinjam::create($validated);
        return response()->json([
            'message' => 'Data peminjaman berhasil ditambahkan',
            'data' => $pinjam,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $pinjam = Pinjam::findOrFail($id);

        $validated = $request->validate([
            'no_anggota' => 'nullable|exists:anggotas,id',
            'id_buku' => 'nullable|exists:buku,id',
            'tgl_pinjam' => 'nullable|date',
            'tgl_kembali' => 'nullable|date|after:tgl_pinjam',
            'denda' => 'nullable|numeric|min:0',
        ]);

        $pinjam->update($validated);

        return response()->json([
            'message' => 'Data peminjaman berhasil diupdate',
            'data' => $pinjam,
        ]);
    }

    // Menghapus data peminjaman
    public function destroy($id)
    {
        $pinjam = Pinjam::findOrFail($id);
        $pinjam->delete();

        return response()->json([
            'message' => 'Data peminjaman berhasil dihapus',
        ]);
    }
}
