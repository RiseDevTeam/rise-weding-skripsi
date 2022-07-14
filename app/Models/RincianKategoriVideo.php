<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianKategoriVideo extends Model
{
    use HasFactory;
    protected $table = 'rincian_kategori_video';
    protected $guarded = ['id_rincian_kategori_video'];
}
