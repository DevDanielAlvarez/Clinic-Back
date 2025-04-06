<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remedy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prescription',
        'quantity',
        'type',
        'is_generic'
    ];

    protected $table = 'remedies';
}
