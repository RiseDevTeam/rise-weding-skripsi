<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusikTemplate extends Model
{
    use HasFactory;

    protected $table = 'musik_template';
    protected $guarded = ['id_musik_template'];

    public $timestamps = false;
}
