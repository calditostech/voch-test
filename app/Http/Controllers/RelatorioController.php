<?php 

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\CargoColaborador;
use App\Models\Unidade;

class RelatorioController extends Controller
{
    public function relatorioColaboradores()
    {
        $colaboradores = Colaborador::with(['unidade', 'cargoColaborador.cargo'])
        ->orderBy('id', 'desc')
        ->get();

        return view('relatorios.colaboradores', compact('colaboradores'));
    }

    public function relatorioTotalColaboradoresPorUnidade()
    {
        $unidades = Unidade::withCount('colaboradores')
            ->orderByDesc('colaboradores_count')
            ->get();

        return view('relatorios.total_colaboradores_por_unidade', compact('unidades'));
    }

    public function relatorioRankingColaboradores()
    {
        $colaboradoresRanking = CargoColaborador::with('colaborador.unidade', 'cargo')
            ->orderByDesc('nota_desempenho')
            ->get();

        return view('relatorios.ranking_colaboradores', compact('colaboradoresRanking'));
    }
}
