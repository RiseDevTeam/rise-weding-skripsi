<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    use HasFactory;

    protected $table = 'sub_kategori';

    protected $primaryKey = 'id_sub_kategori';

    protected $guarded = [
        'id_sub_kategori'
    ];
}
