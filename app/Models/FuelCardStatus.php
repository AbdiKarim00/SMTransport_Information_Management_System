<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelCardStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function fuelCards()
    {
        return $this->hasMany(FuelCard::class);
    }
}