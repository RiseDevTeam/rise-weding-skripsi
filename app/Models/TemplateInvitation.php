<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateInvitation extends Model
{
    use HasFactory;

    protected $table = 'template_invitation';

    protected $primaryKey = 'id_template';

    protected $guarded = [
        'id_template'
    ];
}
