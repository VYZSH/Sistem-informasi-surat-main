<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Surat Masuk</title>
</head>
<body>

    <h1>Detail Surat Masuk</h1>

    <p>
        <strong>Nomor Surat:</strong>
        {{ $surat->no_surat }}
    </p>

    <p>
        <strong>Tanggal:</strong>
        {{ $surat->tanggal }}
    </p>

    <p>
        <strong>Pengirim:</strong>
        {{ $surat->pengirim }}
    </p>

    <p>
        <strong>Perihal:</strong>
        {{ $surat->perihal }}
    </p>

    <p>
        <strong>Keterangan:</strong>
        {{ $surat->keterangan ?? 'Tidak ada keterangan' }}
    </p>

    <a href="{{ route('surat-masuk.index') }}">
        Kembali
    </a>

</body>
</html>
