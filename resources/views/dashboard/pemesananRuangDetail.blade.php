@extends('dashboard.template.templatedashboard')
@section('content')
    Nama : {{$reservasi->name}} <br>
    Nomor : {{$reservasi->no}} <br>
    Email : {{$reservasi->email}} <br>
    Ruang : {{$reservasi->ruang}} <br>
    Deskripsi : {{$reservasi->deskripsi}} <br>
    Waktu : {{$reservasi->waktu_mulai}} - {{$reservasi->waktu_selesai}} <br>
    Status : {{$reservasi->status}}
@endsection
