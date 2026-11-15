@extends('layouts.app')
@section('title', 'Edit Surat Masuk')
@section('content')
<h1 class="page-title">Edit Surat Masuk</h1>
<p class="muted" style="margin-bottom:22px">Lengkapi informasi surat pada formulir berikut.</p>
<div class="card" style="max-width:720px">
<form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="field">
        <label for="no_surat">Nomor Surat</label>
        <input id="no_surat" type="text" name="no_surat" value="{{ old('no_surat', $surat->no_surat ?? '') }}" required>
        @error('nomor_surat') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="tanggal">Tanggal</label>
        <input id="tanggal" type="date" name="tanggal" value="{{ old('tanggal', $surat->tanggal ?? '') }}" required>
        @error('tanggal') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="pengirim">Pengirim</label>
        <input id="pengirim" type="text" name="pengirim" value="{{ old('pengirim', $surat->pengirim ?? '') }}" required>
        @error('pengirim') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="perihal">Perihal</label>
        <input id="perihal" type="text" name="perihal" value="{{ old('perihal', $surat->perihal ?? '') }}" required>
        @error('perihal') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="keterangan">Keterangan</label>
        <textarea id="keterangan" name="keterangan">{{ old('keterangan', $surat->keterangan ?? '') }}</textarea>
        @error('keterangan') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div style="display:flex;gap:10px"><button class="btn btn-primary" type="submit">Simpan Perubahan</button><a class="btn btn-light" href="{{ route('surat-masuk.index') }}">Kembali</a></div>
</form></div>
@endsection
