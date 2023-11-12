<?php

namespace App\Models;

use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Petugas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman'; // Nama tabel Peminjaman

    protected $fillable = [
        'tanggal_pinjam',
        'tanggal_kembali',
        'buku_id',
        'anggota_id',
        'petugas_id',
    ];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'petugas_id');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }
}
