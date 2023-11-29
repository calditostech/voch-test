<?php

namespace Database\Factories;

use App\Models\Unidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnidadeFactory extends Factory
{
    protected $model = Unidade::class;

    public function definition()
    {
        return [
            'nome_fantasia' => $this->faker->company,
            'razao_social' => $this->faker->company,
            'cnpj' => $this->faker->unique()->numerify('##############'),
        ];
    }
}
