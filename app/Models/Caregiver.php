<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caregiver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'birth',
        'email',
        'phone',
        'role',
        'period',
        'password'
    ];

    protected $table = 'caregivers';
}
