<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianKetegoriTemplate extends Model
{
    use HasFactory;

    protected $table = 'rincian_kategori_template';

    protected $primaryKey = 'id_rincian_kategori_template';

    protected $guarded = [
        'id_rincian_kategori_template'
    ];
}
