
@extends('layouts.app')

@section('title', 'Edit Surat Keluar')

@section('content')

<h1>Edit Surat Keluar</h1>

<form action="{{ route('surat-keluar.update', $surat->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <p>Nomor Surat</p>
    <input type="text" name="nomor_surat"
           value="{{ old('nomor_surat', $surat->nomor_surat) }}"
           required>

    <p>Tanggal</p>
    <input type="date" name="tanggal"
           value="{{ old('tanggal', $surat->tanggal) }}"
           required>

    <p>Penerima</p>
    <input type="text" name="tujuan"
           value="{{ old('tujuan', $surat->tujuan) }}"
           required>

    <p>Perihal</p>
    <input type="text" name="perihal"
           value="{{ old('perihal', $surat->perihal) }}"
           required>

    <p>Keterangan</p>
    <textarea name="keterangan">{{ old('keterangan', $surat->keterangan) }}</textarea>

    <br><br>

    <button type="submit">Simpan Perubahan</button>

    <a href="{{ route('surat-keluar.index') }}">Kembali</a>

</form>

@endsection
