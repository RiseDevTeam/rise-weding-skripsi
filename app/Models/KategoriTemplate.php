<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTemplate extends Model
{
    use HasFactory;

    protected $table = 'kategori_template';

    protected $primaryKey = 'id_kategori_template';

    protected $guarded = [
        'id_kategori_template'
    ];
}
