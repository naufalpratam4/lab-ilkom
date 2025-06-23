<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
 protected $table = 'reservasi'; // <- ini penting
    protected $fillable = [
        'name', 'nim', 'email', 'no', 'ruang', 'tgl', 'waktu_mulai', 'waktu_selesai', 'deskripsi'
    ];
}
