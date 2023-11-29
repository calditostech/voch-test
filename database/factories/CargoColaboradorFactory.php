<?php

namespace Database\Factories;

use App\Models\CargoColaborador;
use Illuminate\Database\Eloquent\Factories\Factory;

class CargoColaboradorFactory extends Factory
{
    protected $model = CargoColaborador::class;

    public function definition()
    {
        return [
            'cargo_id' => \App\Models\Cargo::factory(),
            'colaborador_id' => \App\Models\Colaborador::factory(),
            'nota_desempenho' => $this->faker->randomFloat(2, 0, 10),
        ];
    }
}
