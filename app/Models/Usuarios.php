<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco',
        'cidade',
        'complemento',
        'dt_nascimento',
        'dt_batismo',
        'dt_conversao',
        'genero',
    ];
}
