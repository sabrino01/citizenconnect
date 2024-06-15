<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impot extends Model
{
    use HasFactory;

    protected $table = 'impots';

    protected $fillable = [
        'code',
        'nom_complet',
        'adresse',
        'emplacement',
        'hp',
        'ht',
        'aup',
        'aut',
        'valeur_venale',
        'rom'
    ];
}
