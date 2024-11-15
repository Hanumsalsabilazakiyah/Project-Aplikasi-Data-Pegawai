@extends('layout')

@section('konten')

<h4>Edit Pegawai</h4>

<form action="{{ route('pegawai.update', $pegawai->id) }}" method="post">
    @csrf
    <label>NIP</label>
    <input type="number" name="nip" value="{{ $pegawai->nip }}" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $pegawai->nama }}" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" value="{{ $pegawai->alamat }}" class="form-control mb-2">
    <label>No HP</label>
    <input type="text" name="no_hp" value="{{ $pegawai->no_hp }}" class="form-control mb-2">
    <label>Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin }}" class="form-control mb-2">
    <label>Agama</label>
    <input type="text" name="agama" value="{{ $pegawai->agama }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection