<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataKeluargaBesarPria extends Model
{
    protected $table = 'biodata_keluarga_besar_pria';

    protected $primaryKey = 'id_keluarga_besar_pria';

    protected $guarded = [
        'id_keluarga_besar_pria'
    ];

    public $timestamps = false;
}
