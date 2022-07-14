<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataKutipanAyat extends Model
{
    protected $table = 'biodata_kutipan_ayat';

    protected $primaryKey = 'id_kutipan_ayat';

    protected $guarded = [
        'id_kutipan_ayat'
    ];

    public $timestamps = false;
}
