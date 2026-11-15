@extends('layouts.app')
@section('title', 'Tambah Surat Keluar')
@section('content')
<h1 class="page-title">Tambah Surat Keluar</h1>
<p class="muted" style="margin-bottom:22px">Lengkapi informasi surat pada formulir berikut.</p>
<div class="card" style="max-width:720px">
<form action="{{ route('surat-keluar.store') }}" method="POST">
    @csrf
    <div class="field">
        <label for="no_surat">Nomor Surat</label>
        <input id="no_surat" type="text" name="no_surat" value="{{ old('no_surat', '') }}" required>
        @error('no_surat') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="tanggal">Tanggal</label>
        <input id="tanggal" type="date" name="tanggal" value="{{ old('tanggal', '') }}" required>
        @error('tanggal') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div class="field">
        <label for="penerima">Penerima</label>
        <input id="penerima" type="text" name="penerima" value="{{ old('penerima', '') }}" required>
        @error('penerima') <span class="error">{{ $message }}</span> @enderror
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
    <div style="display:flex;gap:10px"><button class="btn btn-primary" type="submit">Simpan</button><a class="btn btn-light" href="{{ route('surat-keluar.index') }}">Kembali</a></div>
</form></div>
@endsection
