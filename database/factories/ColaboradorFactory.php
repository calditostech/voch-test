<?php

namespace Database\Factories;

use App\Models\Colaborador;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColaboradorFactory extends Factory
{
    protected $model = Colaborador::class;

    public function definition()
    {
        return [
            'unidade_id' => \App\Models\Unidade::factory(),
            'nome' => $this->faker->name,
            'cpf' => $this->faker->unique()->numerify('###########'),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
