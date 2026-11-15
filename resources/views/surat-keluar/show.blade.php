@extends('layouts.app')
@section('title', 'Detail Surat Keluar')
@section('content')
<h1 class="page-title">Detail Surat Keluar</h1>
<div class="card" style="max-width:720px;margin-top:20px">
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Nomor Surat</div><div style="font-weight:600;margin-top:4px">{{ $surat->no_surat }}</div></div>
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Tanggal</div><div style="font-weight:600;margin-top:4px">{{ $surat->tanggal }}</div></div>
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Penerima</div><div style="font-weight:600;margin-top:4px">{{ $surat->penerima }}</div></div>
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Perihal</div><div style="font-weight:600;margin-top:4px">{{ $surat->perihal }}</div></div>
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Keterangan</div><div style="font-weight:600;margin-top:4px">{{ $surat->keterangan ?? 'Tidak ada keterangan' }}</div></div>
<div style="margin-top:20px"><a class="btn btn-light" href="{{ route('surat-keluar.index') }}">Kembali</a></div>
</div>
@endsection
