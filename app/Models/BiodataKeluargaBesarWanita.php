<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataKeluargaBesarWanita extends Model
{
    protected $table = 'biodata_keluarga_besar_wanita';

    protected $primaryKey = 'id_keluarga_besar_wanita';

    protected $guarded = [
        'id_keluarga_besar_wanita'
    ];

    public $timestamps = false;
}
