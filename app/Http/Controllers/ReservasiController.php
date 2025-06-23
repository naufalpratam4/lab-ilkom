<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
class ReservasiController extends Controller
{
    public function addreservasi(Request $request){
        $reservasi = new Reservasi();
        $reservasi->name = $request->name;
        $reservasi->nim = $request->nim;
        $reservasi->email = $request->email;
        $reservasi->no = $request->no;
        $reservasi->ruang = $request->ruang;
        $reservasi->tgl = $request->tgl;
        $reservasi->waktu_mulai= $request->waktu_mulai;
        $reservasi->waktu_selesai = $request->waktu_selesai;
        $reservasi->deskripsi= $request->deskripsi;
        $reservasi->save();
        return redirect()->back();
    }
}
