<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutgoingLetter extends Model
{
    protected $fillable = [
        'no_surat',
        'tanggal',
        'penerima',
        'perihal',
        'keterangan',
    ];
}
