@extends('layouts.app')

@section('title', 'Surat Keluar')

@section('content')

<style>
    .tabel-surat {
        border-collapse: collapse;
        width: auto;
        margin-top: 15px;
    }

    .tabel-surat th,
    .tabel-surat td {
        border: 1px solid #777;
        padding: 10px;
        text-align: left;
        white-space: nowrap;
    }

    .tabel-surat th {
        text-align: center;
    }

    .tabel-surat td:last-child {
        text-align: center;
    }
</style>

<h1>Daftar Surat Keluar</h1>

@can('manage-letters')
<a href="{{ route('surat-keluar.create') }}">
    + Tambah Surat Keluar
</a>
@endcan

<br><br>

@if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<table class="tabel-surat">

    <thead>
        <tr>
            <th>No</th>
            <th>Nomor_Surat</th>
            <th>Tanggal</th>
            <th>Penerima</th>
            <th>Perihal</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse ($suratKeluar as $surat)

            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $surat->no_surat }}</td>

                <td>{{ $surat->tanggal }}</td>

                <td>{{ $surat->penerima }}</td>

                <td>{{ $surat->perihal }}</td>

                <td>{{ $surat->keterangan }}</td>

                <td>
                    <a href="{{ route('surat-keluar.show', $surat->id) }}">
                        Detail
                    </a>
                    |
                    @can('manage-letters')
                    <a href="{{ route('surat-keluar.edit', $surat->id) }}">
                        Edit
                    </a>
                    |
                    <form action="{{ route('surat-keluar.destroy', $surat->id) }}"
                          method="POST"
                          style="display: inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                            onclick="return confirm('Yakin ingin menghapus surat ini?')">
                            Hapus
                        </button>

                    </form>
                    @endcan
                </td>
            </tr>

        @empty

            <tr>
                <td colspan="7" style="text-align: center;">
                    Belum ada data surat keluar.
                </td>
            </tr>

        @endforelse

    </tbody>

</table>

@endsection
