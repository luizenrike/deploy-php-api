<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
    'titulo',
    'autor',
    'editora',
    'ano_publicacao',
    'genero',
    'disponivel',
    'descricao'
    ];
}
