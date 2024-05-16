<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordenes extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'number',
        'type_service',
        'client',
        'technical',
        'hour_in',
        'hour_out',
        'service_description',
        'used_components',
        'observations',
        'technical_signature',
        'client_signature',
        'work_done',
    ];

}
