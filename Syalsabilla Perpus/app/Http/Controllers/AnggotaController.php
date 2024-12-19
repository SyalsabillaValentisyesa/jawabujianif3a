<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function insertsql(){
        $result = DB::insert("INSERT INTO anggotas(noanggota, nama, alamat, jurusan, `tgl masuk`, notelp) 
        VALUES ('A001', 'Yulianto', 'Plaju', 'Informatika', '1990-09-12', '081234567891')");
        dump($result);
    }

    public function insertsql1(){
        $result = DB::insert("INSERT INTO anggotas(noanggota, nama, alamat, jurusan, `tgl masuk`, notelp) 
        VALUES ('A001', 'heee', 'Plaju Palembang', 'Informatika', '2024-12-14', '081321344321')");
        dump($result);
    }

    public function tampilan(){
        $result = DB::select('SELECT * FROM anggotas');
        return view('tampilanggota', ['anggotas' => $result]);
    }

    public function hapus(){
        $result=DB::delete('DELETE from anggotas Where nama= ?',['Yulianto']);
        dump($result);
    }

    public function index(){
        return view('daftar');
    }

    // public function prosesinput(Request $request){
    //     dump($request);
    // }

     public function prosesInput(Request $request){
        DB::table('anggotas')->insert([
            'noanggota' =>$request->nomor,
            'nama' =>$request->nama,
            'alamat' =>$request->alamat,
            'jurusan' =>$request->jurusan,
            'tgl_masuk' =>$request->tgl,
            'notelp'=>$request->notelp
            
        ]);
        return view('/daftar');
     }

     public function hapuss($id){
        $result = DB::table('anggotas')->where('id', $id)->delete();
    
        if ($result) {
            return redirect('/anggota/tampil')->with('success', 'Anggota berhasil dihapus!');
        } else {
            return redirect('/anggota/tampil')->with('error', 'Data tidak ditemukan atau gagal dihapus.');
        }
     }

     public function formTambah() {
        return view('tambahanggota');
    }
    
    public function prosesTambah(Request $request){
        $request->validate([
            'noanggota' => 'required|string|max:8',
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
            'jurusan' => 'required|string|max:50',
            'tgl' => 'required|date',
            'notelp' => 'required|string|max:15',
        ]);
        DB::table('anggotas')->insert([
            'noanggota' => $request->noanggotas,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jurusan' => $request->jurusan,
            'tgl_masuk' => $request->tgl,
            'notelp' => $request->notelp,
        ]);
    
        return redirect('/anggota/tambah')->with('success', 'Anggota berhasil ditambahkan!');
    }

    public function tampilkanAnggota(){
    $anggotas = DB::table('anggotas')->get();

    return view('tampilanggota', ['anggotas' => $anggotas]);
    }
}
