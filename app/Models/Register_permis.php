<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register_permis extends Model
{
    use HasFactory;

    protected $table = 'register_permis';

    protected $fillable = [
      'username',
      'email',
      'password'
    ];
}
