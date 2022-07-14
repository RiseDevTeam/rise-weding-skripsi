<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataJadwalResepsi2 extends Model
{
    protected $table = 'biodata_jadwal_resepsi_2';

    protected $primaryKey = 'id_jadwal_resepsi2';

    protected $guarded = [
        'id_jadwal_resepsi2'
    ];

    public $timestamps = false;
}
