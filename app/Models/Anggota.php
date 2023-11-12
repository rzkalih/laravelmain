<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $fillable = [
        'id',
        'kode',
        'nama',
        'jk',
        'tlp',
        'alamat',

    ];
    public function peminjaman()
    {
        return $this->hasMany('App\Models\Peminjaman', 'id', 'anggota_id');
    }
}
