<?php

namespace App\Http\Controllers;

use App\Repositories\UnidadeRepository;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    private $unidadeRepository;

    public function __construct(UnidadeRepository $unidadeRepository)
    {
        $this->unidadeRepository = $unidadeRepository;
    }

    public function index()
    {
        $unidades = $this->unidadeRepository->getAll();
        return view('unidades.index', compact('unidades'));
    }

    public function create()
    {
        return view('unidades.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome_fantasia' => 'required|string',
            'razao_social' => 'required|string',
            'cnpj' => 'required|unique:unidades',
        ]);

        $this->unidadeRepository->create($data);

        return redirect()->route('unidades.index')->with('success', 'Unidade cadastrada com sucesso!');
    }

    public function edit($id)
    {
        $unidade = $this->unidadeRepository->find($id);

        if (!$unidade) {
            abort(404); 
        }

        return view('unidades.edit', compact('unidade'));
    }

    public function update(Request $request, $id)
    {
        $unidade = $this->unidadeRepository->find($id);

        if (!$unidade) {
            abort(404); 
        }

        $data = $request->validate([
            'nome_fantasia' => 'required|string',
            'razao_social' => 'required|string',
            'cnpj' => 'required|unique:unidades,cnpj,' . $id, 
        ]);

        $unidade->update($data);

        return redirect()->route('unidades.index')->with('success', 'Unidade atualizada com sucesso!');
    }
}
