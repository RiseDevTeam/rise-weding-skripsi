<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataPasanganPria extends Model
{
    protected $table = 'biodata_pasangan_pria';

    protected $primaryKey = 'id_pasangan_pria';

    protected $guarded = [
        'id_pasangan_pria'
    ];

    public $timestamps = false;
}
