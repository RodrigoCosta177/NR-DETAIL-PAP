<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $table = 'servicos';

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
    ];

    // Um serviço pode ter muitos clientes
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'servico_id');
    }
}

