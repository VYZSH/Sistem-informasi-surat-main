@extends('layouts.app')

@section('title', 'Surat Masuk')

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

<h1>Daftar Surat Masuk</h1>

<a href="{{ route('surat-masuk.create') }}">
    + Tambah Surat Masuk
</a>

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
            <th>Pengirim</th>
            <th>Perihal</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse ($suratMasuk as $surat)

            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    {{ $surat->nomor_surat ?? $surat->no_surat ?? '-' }}
                </td>

                <td>{{ $surat->tanggal }}</td>

                <td>{{ $surat->pengirim }}</td>

                <td>{{ $surat->perihal }}</td>

                <td>
                    <a href="{{ route('surat-masuk.show', $surat->id) }}">
                        Detail
                    </a>
                    |
                    <a href="{{ route('surat-masuk.edit', $surat->id) }}">
                        Edit
                    </a>
                    |
                    <form action="{{ route('surat-masuk.destroy', $surat->id) }}"
                          method="POST"
                          style="display: inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                            onclick="return confirm('Yakin ingin menghapus surat ini?')">
                            Hapus
                        </button>

                    </form>
                </td>
            </tr>

        @empty

            <tr>
                <td colspan="6" style="text-align: center;">
                    Belum ada data surat masuk.
                </td>
            </tr>

        @endforelse

    </tbody>

</table>

@endsection
