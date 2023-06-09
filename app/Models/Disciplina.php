<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $table = 'disciplinas';
    public $timestamps = false;

    protected $fillable = [
        'curso',
        'ano',
        'semestre',
        'abreviatura',
        'nome',
        'ECTS',
        'horas',
        'opcional'
    ];
}
