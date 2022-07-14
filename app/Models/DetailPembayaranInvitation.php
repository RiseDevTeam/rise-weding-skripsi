<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembayaranInvitation extends Model
{
    use HasFactory;

    protected $table = 'detail_pembayaran_invitation';

    protected $primaryKey = 'id_detail_pembayaran';

    protected $guarded = [
        'id_detail_pembayaran'
    ];

    public $timestamps = false;
}
