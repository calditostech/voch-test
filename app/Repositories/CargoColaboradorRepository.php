<?php

namespace App\Repositories;

use App\Models\CargoColaborador;

class CargoColaboradorRepository
{
    public function getAllWithRelations()
    {
        return CargoColaborador::with('colaborador', 'cargo')->get();
    }
}
