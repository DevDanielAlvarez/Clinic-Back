<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /** @use HasFactory<\Database\Factories\PatientFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'birth',
        'condition',
        'allergy',
        'emergency_contact',
        'medical_officer',
        'responsible_id',
    ];

    public function responsible()
    {
        return $this->belongsTo(Responsible::class);
    }
}
