<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentSeverity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'description',
        'status',
        'notes'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    protected $table = 'incident_severities';

    public function incidents(): HasMany
    {
        return $this->hasMany(Incident::class);
    }
}
