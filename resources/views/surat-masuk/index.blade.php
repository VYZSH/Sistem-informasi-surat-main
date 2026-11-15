@extends('layouts.app')
@section('title', 'Surat Masuk')
@section('content')
<div style="display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap;margin-bottom:20px">
    <div><h1 class="page-title">Surat Masuk</h1><p class="muted">Daftar surat yang diterima.</p></div>
    @can('manage-letters')<a class="btn btn-primary" href="{{ route('surat-masuk.create') }}">+ Tambah Surat</a>@endcan
</div>
@if (session('success'))<div class="alert">{{ session('success') }}</div>@endif
<div class="card table-wrap" style="padding:0">
<table>
<thead><tr><th>No</th><th>Nomor Surat</th><th>Tanggal</th><th>Pengirim</th><th>Perihal</th><th>Aksi</th></tr></thead>
<tbody>
@forelse ($suratMasuk as $surat)
<tr>
<td>{{ $loop->iteration }}</td><td>{{ $surat->nomor_surat ?? $surat->no_surat ?? '-' }}</td><td>{{ $surat->tanggal }}</td><td>{{ $surat->pengirim }}</td><td>{{ $surat->perihal }}</td>
<td><div class="actions"><a href="{{ route('surat-masuk.show', $surat->id) }}">Detail</a>
@can('manage-letters')
<a href="{{ route('surat-masuk.edit', $surat->id) }}">Edit</a>
<form action="{{ route('surat-masuk.destroy', $surat->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus surat ini?')">@csrf @method('DELETE')<button class="btn btn-danger" type="submit">Hapus</button></form>
@endcan</div></td>
</tr>
@empty<tr><td colspan="6" style="text-align:center;color:#64748b">Belum ada data surat masuk.</td></tr>@endforelse
</tbody></table></div>
@endsection
