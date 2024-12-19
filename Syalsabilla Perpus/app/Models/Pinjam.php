<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;

class Pinjam extends Model
{
    use HasFactory;

    protected $table = 'pinjam';
    protected $primaryKey = 'nopinjam';
    protected $fillable = ['no_anggota', 'id_buku', 'tgl_pinjam', 'tgl_kembali', 'denda'];

    public function anggota()
    {
        return $this->belongsTo(AnggotaController::class, 'no_anggota');
    }

    public function buku()
    {
        return $this->belongsTo(BukuController::class, 'id_buku');
    }
}
