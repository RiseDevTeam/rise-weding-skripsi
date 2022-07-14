<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataPelanggan extends Model
{
    protected $table = 'biodata_pelanggan';

    protected $primaryKey = 'id_biodata_pelanggan';

    protected $guarded = [
        'id_biodata_pelanggan'
    ];

    public $timestamps = false;
}
