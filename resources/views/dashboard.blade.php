@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <h1 class="page-title">Dashboard</h1>
    <p class="muted" style="margin:0 0 24px">Selamat datang di Sistem Informasi Surat.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(210px,1fr));gap:16px">
        <a class="card" href="{{ route('surat-masuk.index') }}">
            <div class="muted">Data Surat Masuk</div>
            <div style="font-size:25px;font-weight:700;color:#1d4ed8;margin-top:8px">Kelola Surat Masuk →</div>
        </a>
        <a class="card" href="{{ route('surat-keluar.index') }}">
            <div class="muted">Data Surat Keluar</div>
            <div style="font-size:25px;font-weight:700;color:#0f766e;margin-top:8px">Kelola Surat Keluar →</div>
        </a>
    </div>
@endsection
