<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'parents_name',
        'email',
        'phone',
        'school_name',
        'schooling',
        'sex',
        'age',
        'particular_session',
        'psicologo',
        'fono',
        'psicomotricista',
    ];
}
