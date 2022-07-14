<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesananInvitation extends Model
{
    use HasFactory;

    protected $table = 'detail_pemesanan_invitation';

    protected $primaryKey = 'id_detail_pemesanan';

    protected $guarded = [
        'id_detail_pemesanan'
    ];

    public $timestamps = false;
}
