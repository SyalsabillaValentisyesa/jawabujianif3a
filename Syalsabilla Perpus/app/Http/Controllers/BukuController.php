<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')->get();
        return view('tampilbuku', ['buku' => $buku]);
    }
    public function formTambah()
    {
        return view('tambahbuku');
    }
    public function prosesTambah(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penerbit' => 'required|string|max:100',
            'penulis' => 'required|string|max:100',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        DB::table('buku')->insert([
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit,
        ]);
        

        return redirect('/buku/tampil')->with('success', 'Buku berhasil ditambahkan!');
    }

    // Menghapus buku berdasarkan ID
    public function hapus($id)
    {
        DB::table('buku')->where('id', $id)->delete();
        return redirect('/buku/tampil')->with('success', 'Buku berhasil dihapus!');
    }
}
