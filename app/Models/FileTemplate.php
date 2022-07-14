<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileTemplate extends Model
{
    use HasFactory;

    protected $table = 'file_template';

    protected $primaryKey = 'id_file_template';

    protected $guarded = [
        'id_file_template'
    ];
}
