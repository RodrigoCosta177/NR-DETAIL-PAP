<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servico;

class ServicosSeeder extends Seeder
{
    public function run()
    {
        $servicos = [
            ['nome' => 'Polimento', 'tipo_servico' => 'Polimento', 'preco' => 50],
            ['nome' => 'Lavagem e aspiração', 'tipo_servico' => 'Lavagem e aspiração', 'preco' => 30],
        ];

        foreach ($servicos as $servico) {
            Servico::create($servico);
        }
    }
}
