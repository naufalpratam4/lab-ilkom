<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;


class PeminjamanController extends Controller
{
    public function addpeminjaman(Request $request)
    {
        $peminjaman = new Peminjaman();
        $peminjaman->name = $request->name;
        $peminjaman->nim = $request->nim;
        $peminjaman->no = $request->no;
        $peminjaman->email = $request->email;
        // $peminjaman->no = $request->no;
        $peminjaman->jenis_barang = $request->jenis_barang;
        $peminjaman->nama_barang = $request->nama_barang;
        $peminjaman->jumlah = $request->jumlah;
        $peminjaman->tanggal_peminjaman = $request->tanggal_peminjaman;
        $peminjaman->tanggal_pengembalian = $request->tanggal_pengembalian;
        // $peminjaman->waktu_selesai = $request->waktu_selesai;
        $peminjaman->tujuan = $request->tujuan;
        $peminjaman->save();
        return redirect()->back();
    }
}
