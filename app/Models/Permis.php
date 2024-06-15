<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permis extends Model
{
    use HasFactory;

    protected $table = 'permis';

    protected $fillable = [
        'numero',
        'genre',
        'nom',
        'prenom',
        'naissance',
        'lieu',
        'adresse',
        'phone',
        'category',
        'formation',
        'date_obtention',
        'lieu_obtention',
        'date_expiration'
    ];
}
