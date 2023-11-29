<?php

// app/Http/Controllers/CargoController.php

namespace App\Http\Controllers;

use App\Repositories\CargoRepository;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    private $cargoRepository;

    public function __construct(CargoRepository $cargoRepository)
    {
        $this->cargoRepository = $cargoRepository;
    }

    public function index()
    {
        $cargos = $this->cargoRepository->getAll();
        return view('cargos.index', compact('cargos'));
    }

    public function create()
    {
        return view('cargos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'cargo' => 'required|string|unique:cargos',
        ]);

        $this->cargoRepository->create($data);

        return redirect()->route('cargos.index')->with('success', 'Cargo cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $cargo = $this->cargoRepository->getById($id);
        return view('cargos.edit', compact('cargo'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'cargo' => 'required|string|unique:cargos,cargo,' . $id,
        ]);

        $cargo = $this->cargoRepository->getById($id);
        $this->cargoRepository->update($data, $cargo);

        return redirect()->route('cargos.index')->with('success', 'Cargo atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $cargo = $this->cargoRepository->getById($id);
        $this->cargoRepository->delete($cargo);

        return redirect()->route('cargos.index')->with('success', 'Cargo excluído com sucesso!');
    }
}
