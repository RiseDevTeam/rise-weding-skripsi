<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataPasanganWanita extends Model
{
    protected $table = 'biodata_pasangan_wanita';

    protected $primaryKey = 'id_pasangan_wanita';

    protected $guarded = [
        'id_pasangan_wanita'
    ];

    public $timestamps = false;
}
