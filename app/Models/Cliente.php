<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Define a tabela associada
    protected $table = 'clientes';

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'nome',
        'email',
        'servico_id',
    ];

    // Relação com o serviço (um cliente tem um serviço)
    public function servico()
    {
        return $this->belongsTo(Servico::class, 'servico_id');
    }
}
