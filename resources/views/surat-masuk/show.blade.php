@extends('layouts.app')
@section('title', 'Detail Surat Masuk')
@section('content')
<h1 class="page-title">Detail Surat Masuk</h1>
<div class="card" style="max-width:720px;margin-top:20px">
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Nomor Surat</div><div style="font-weight:600;margin-top:4px">{{ $surat->no_surat }}</div></div>
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Tanggal</div><div style="font-weight:600;margin-top:4px">{{ $surat->tanggal }}</div></div>
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Pengirim</div><div style="font-weight:600;margin-top:4px">{{ $surat->pengirim }}</div></div>
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Perihal</div><div style="font-weight:600;margin-top:4px">{{ $surat->perihal }}</div></div>
<div style="padding:12px 0;border-bottom:1px solid #e2e8f0"><div class="muted">Keterangan</div><div style="font-weight:600;margin-top:4px">{{ $surat->keterangan ?? 'Tidak ada keterangan' }}</div></div>
<div style="margin-top:20px"><a class="btn btn-light" href="{{ route('surat-masuk.index') }}">Kembali</a></div>
</div>
@endsection
