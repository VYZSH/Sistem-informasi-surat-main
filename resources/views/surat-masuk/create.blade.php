@extends('layouts.app')
@section('title', 'Tambah Surat Masuk')
@section('content')
<h1 class="page-title">Tambah Surat Masuk</h1>
<p class="muted" style="margin-bottom:22px">Lengkapi informasi surat pada formulir berikut.</p>
<div class="card" style="max-width:720px">
<form action="{{ route('surat-masuk.store') }}" method="POST">
    @csrf
    <div class="field">
        <label for="no_surat">Nomor Surat</label>
        <input id="no_surat" type="text" name="no_surat" value="{{ old('no_surat', '') }}" required>
        @error('nomor_surat') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="tanggal">Tanggal</label>
        <input id="tanggal" type="date" name="tanggal" value="{{ old('tanggal', '') }}" required>
        @error('tanggal') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="pengirim">Pengirim</label>
        <input id="pengirim" type="text" name="pengirim" value="{{ old('pengirim', '') }}" required>
        @error('pengirim') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="perihal">Perihal</label>
        <input id="perihal" type="text" name="perihal" value="{{ old('perihal', '') }}" required>
        @error('perihal') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="keterangan">Keterangan</label>
        <textarea id="keterangan" name="keterangan">{{ old('keterangan', '') }}</textarea>
        @error('keterangan') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div style="display:flex;gap:10px"><button class="btn btn-primary" type="submit">Simpan</button><a class="btn btn-light" href="{{ route('surat-masuk.index') }}">Kembali</a></div>
</form></div>
@endsection
