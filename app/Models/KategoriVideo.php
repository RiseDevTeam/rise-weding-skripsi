<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriVideo extends Model
{
    use HasFactory;
    protected $table = 'kategori_video';
    protected $guarded = ['id_kategori_video'];
}
