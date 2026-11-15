@extends('layouts.app')
@section('title', 'Surat Keluar')
@section('content')
<div style="display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap;margin-bottom:20px">
    <div><h1 class="page-title">Surat Keluar</h1><p class="muted">Daftar surat yang telah dikeluarkan.</p></div>
    @can('manage-letters')<a class="btn btn-primary" href="{{ route('surat-keluar.create') }}">+ Tambah Surat</a>@endcan
</div>
@if (session('success'))<div class="alert">{{ session('success') }}</div>@endif
<div class="card table-wrap" style="padding:0">
<table>
<thead><tr><th>No</th><th>Nomor Surat</th><th>Tanggal</th><th>Penerima</th><th>Perihal</th><th>Keterangan</th><th>Aksi</th></tr></thead>
<tbody>
@forelse ($suratKeluar as $surat)
<tr>
<td>{{ $loop->iteration }}</td><td>{{ $surat->no_surat }}</td><td>{{ $surat->tanggal }}</td><td>{{ $surat->penerima }}</td><td>{{ $surat->perihal }}</td><td>{{ $surat->keterangan }}</td>
<td><div class="actions"><a href="{{ route('surat-keluar.show', $surat->id) }}">Detail</a>
@can('manage-letters')
<a href="{{ route('surat-keluar.edit', $surat->id) }}">Edit</a>
<form action="{{ route('surat-keluar.destroy', $surat->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus surat ini?')">@csrf @method('DELETE')<button class="btn btn-danger" type="submit">Hapus</button></form>
@endcan</div></td>
</tr>
@empty<tr><td colspan="7" style="text-align:center;color:#64748b">Belum ada data surat keluar.</td></tr>@endforelse
</tbody></table></div>
@endsection
