<?php

namespace App\Http\Controllers;

use App\Repositories\ColaboradorRepository;
use App\Repositories\UnidadeRepository;
use App\Repositories\CargoRepository;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    private $colaboradorRepository;
    private $unidadeRepository;
    private $cargoRepository;

    public function __construct(
        ColaboradorRepository $colaboradorRepository,
        UnidadeRepository $unidadeRepository,
        CargoRepository $cargoRepository
    ) {
        $this->colaboradorRepository = $colaboradorRepository;
        $this->unidadeRepository = $unidadeRepository;
        $this->cargoRepository = $cargoRepository;
    }

    public function index()
    {
        $colaboradores = $this->colaboradorRepository->getAllWithRelations(); 
        return view('colaboradores.index', compact('colaboradores'));
    }

    public function create()
    {
        $unidades = $this->unidadeRepository->getAll();
        $cargos = $this->cargoRepository->getAll();
        return view('colaboradores.create', compact('unidades', 'cargos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'unidade_id' => 'required|exists:unidades,id',
            'cargo_id' => 'required|exists:cargos,id',
            'nome' => 'required|string',
            'cpf' => 'required|unique:colaboradores',
            'email' => 'required|email|unique:colaboradores',
        ]);

        $this->colaboradorRepository->create($data);

        return redirect()->route('colaboradores.create')->with('success', 'Colaborador cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (!$colaborador) {
            abort(404);
        }

        $unidades = $this->unidadeRepository->getAll();
        $cargos = $this->cargoRepository->getAll();

        return view('colaboradores.edit', compact('colaborador', 'unidades', 'cargos'));
    }

    public function update(Request $request, $id)
    {
        $colaborador = $this->colaboradorRepository->find($id);

        if (!$colaborador) {
            abort(404);
        }

        $data = $request->validate([
            'nome' => 'required|string',
            'cpf' => 'required|unique:colaboradores,cpf,' . $id,
            'email' => 'required|email|unique:colaboradores,email,' . $id,
            'unidade_id' => 'required|exists:unidades,id',
        ]);

        $this->colaboradorRepository->update($colaborador, $data);

        return redirect()->route('colaboradores.index')->with('success', 'Colaborador atualizado com sucesso!');
    }
}
