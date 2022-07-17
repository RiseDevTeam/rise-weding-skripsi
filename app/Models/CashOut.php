<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashOut extends Model
{
    use HasFactory;

    protected $table = 'cash_out';

    protected $primaryKey = 'id_cash_out';

    protected $guarded = [
        'id_cash_out'
    ];
}
