<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPM extends Model
{
    use HasFactory;
    protected $table = 'spm';
    protected $fillable = [
        'rekanan_nama_perusahaan',
        'nomor_spp'
    ];
}
