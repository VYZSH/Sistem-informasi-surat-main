
@extends('layouts.app')

@section('title', 'Tambah Surat Keluar')

@section('content')

<h1>Tambah Surat Keluar</h1>

<form action="{{ route('surat-keluar.store') }}" method="POST">
    @csrf

    <p>Nomor Surat</p>
    <input type="text" name="no_surat"
           value="{{ old('no_surat') }}" required>

    <p>Tanggal</p>
    <input type="date" name="tanggal"
           value="{{ old('tanggal') }}" required>

    <p>Penerima</p>
    <input type="text" name="penerima"
           value="{{ old('tujuan') }}" required>

    <p>Perihal</p>
    <input type="text" name="perihal"
           value="{{ old('perihal') }}" required>

    <p>Keterangan</p>
    <textarea name="keterangan">{{ old('keterangan') }}</textarea>

    <br><br>

    <button type="submit">Simpan</button>

    <a href="{{ route('surat-keluar.index') }}">Kembali</a>
</form>

@endsection
