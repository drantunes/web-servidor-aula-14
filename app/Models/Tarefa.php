<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected static $tarefas = [
        ['id' => 1, 'titulo' => 'Testar o Laravel'],
        ['id' => 2, 'titulo' => 'Testar as views']
    ];

    public static function getAll()
    {
        return self::$tarefas;
    }

    public static function getTarefa($id)
    {
        return collect(self::$tarefas)
                ->filter(fn ($tarefa) => $tarefa['id'] == $id)
                ->first();
    }
}
