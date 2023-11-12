<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'petugas';
    protected $fillable = [
        'id',
        'nama_petugas',
        'jabatan_petugas',
        'tlp_petugas',
        'alamat_petugas',

    ];

    public function peminjaman()
    {
        return $this->hasMany('App\Models\Peminjaman', 'id', 'petugas_id');
    }
}
