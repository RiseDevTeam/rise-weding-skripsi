<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataGaleriFoto extends Model
{
    protected $table = 'biodata_galeri_foto';

    protected $primaryKey = 'id_galeri_foto';

    protected $guarded = [
        'id_galeri_foto'
    ];

    public $timestamps = false;
}
