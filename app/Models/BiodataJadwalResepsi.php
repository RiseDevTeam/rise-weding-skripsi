<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataJadwalResepsi extends Model
{
    protected $table = 'biodata_jadwal_resepsi';

    protected $primaryKey = 'id_jadwal_resepsi';

    protected $guarded = [
        'id_jadwal_resepsi'
    ];

    public $timestamps = false;
}
