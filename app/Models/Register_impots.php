<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register_impots extends Model
{
    use HasFactory;

    protected $table = 'register_impots';

    protected $fillable = [
      'username',
      'email',
      'password'
    ];
}
