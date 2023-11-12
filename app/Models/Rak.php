<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;
    protected $table = 'rak';
    protected $fillable = [
        'id',
        'nama_rak',
        'lokasi_rak',

    ];
    public function buku()
    {
        return $this->belongsTo('App/Models/Buku');
    }
}
