<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataMusik extends Model
{
    protected $table = 'biodata_musik';

    protected $primaryKey = 'id_musik';

    protected $guarded = [
        'id_musik'
    ];

    public $timestamps = false;
}
