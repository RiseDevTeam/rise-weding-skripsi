<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviewTemplate extends Model
{
    use HasFactory;

    protected $table = 'preview_template_pemesanan';

    protected $primaryKey = 'id_preview_template_pemesanan';

    protected $guarded = [
        'id_preview_template_pemesanan'
    ];

    public $timestamps = false;
}
