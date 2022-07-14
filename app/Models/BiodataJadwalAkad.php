<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataJadwalAkad extends Model
{
    protected $table = 'biodata_jadwal_akad';

    protected $primaryKey = 'id_jadwal_akad';

    protected $guarded = [
        'id_jadwal_akad'
    ];

    public $timestamps = false;
}
