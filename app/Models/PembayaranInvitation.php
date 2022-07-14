<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranInvitation extends Model
{
    use HasFactory;

    protected $table = 'pembayaran_invitation';

    protected $primaryKey = 'id_pembayaran';

    protected $guarded = [
        'id_pembayaran'
    ];

    public $timestamps = false;
}
