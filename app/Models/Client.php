<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function ordenes(): HasMany
    {
        return $this->hasMany(Ordenes::class);
    }
}
