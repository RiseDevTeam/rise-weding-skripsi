<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataHomePage extends Model
{
    protected $table = 'biodata_home_page';

    protected $primaryKey = 'id_biodata_home_page';

    protected $guarded = [
        'id_biodata_home_page'
    ];

    public $timestamps = false;
}
