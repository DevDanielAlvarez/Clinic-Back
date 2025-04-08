<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    /** @use HasFactory<\Database\Factories\ResponsibleFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
