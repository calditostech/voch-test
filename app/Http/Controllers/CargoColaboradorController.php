<?php

namespace App\Http\Controllers;

use App\Models\CargoColaborador;

class CargoColaboradorController extends Controller
{
    public function index()
    {
        $cargoColaboradores = CargoColaborador::with('colaborador', 'cargo')->get();

        return view('cargo_colaboradores.index', compact('cargoColaboradores'));
    }
}
