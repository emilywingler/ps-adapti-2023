<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'curso_id',
        'descricao',
        'imagem',
        'contratado',
    ];

    public function curso_id()
    {
        return $this->belongsTo(Cursos::class, 'curso_id');
    }
}
