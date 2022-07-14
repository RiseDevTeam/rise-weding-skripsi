<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananInvitation extends Model
{
    use HasFactory;

    protected $table = 'pemesanan_invitation';

    protected $primaryKey = 'id_pemesanan';

    protected $guarded = [
        'id_pemesanan'
    ];

    public $timestamps = false;
}
