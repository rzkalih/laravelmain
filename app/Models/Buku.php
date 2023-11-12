<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'id',
        'kode',
        'judul',
        'penulis',
        'tahun_terbit',
        'penerbit',
        'stok',
        'rak_id',

    ];
    public function rak()
    {
        return $this->hasMany('App\Models\Rak', 'id', 'rak_id');
    }

    public function peminjaman()
    {
        return $this->hasMany('App\Models\Peminjaman', 'id', 'buku_id');
    }
}
