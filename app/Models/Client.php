<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'identification_type',
        'identification_number',
        'name',
        'phone',
        'address',
        'email',
    ];
}
