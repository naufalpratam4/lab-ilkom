<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'name',
        'nim',
        'no',
        'email',
        'jenis_barang',
        'nama_barang',
        'jumlah',
        'tanggal_peminjaman',
        'tanggal_pengembalian',
        'tujuan'
    ];
}
