<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Ordenes extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'number',
        'type_service',
        'client',
        'user_id',
        'hour_in',
        'hour_out',
        'service_description',
        'used_components',
        'observations',
        'technical',
        'client_signature',
        'work_done',
    ];

    public function client(): HasOne
    {
        return $this->hasOne(Client::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

}
