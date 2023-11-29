<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\DesempenhoController;
use App\Http\Controllers\RelatorioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

// rotas unidades
Route::get('/unidades', [UnidadeController::class, 'index'])->name('unidades.index');
Route::get('/unidades/create', [UnidadeController::class, 'create'])->name('unidades.create');
Route::post('/unidades', [UnidadeController::class, 'store'])->name('unidades.store');
Route::get('/unidades/{id}/edit', [UnidadeController::class, 'edit'])->name('unidades.edit');
Route::put('/unidades/{id}', [UnidadeController::class, 'update'])->name('unidades.update');

// rotas colaboradores
Route::get('/colaboradores', [ColaboradorController::class, 'index'])->name('colaboradores.index');
Route::get('/colaboradores/create', [ColaboradorController::class, 'create'])->name('colaboradores.create');
Route::post('/colaboradores', [ColaboradorController::class, 'store'])->name('colaboradores.store');
Route::get('/colaboradores/{id}/edit', [ColaboradorController::class, 'edit'])->name('colaboradores.edit');
Route::put('/colaboradores/{id}', [ColaboradorController::class, 'update'])->name('colaboradores.update');
Route::delete('/colaboradores/{id}', [ColaboradorController::class, 'destroy'])->name('colaboradores.destroy');

// rotas desempenho
Route::get('/desempenhos/{colaboradorId}/create', [DesempenhoController::class, 'create'])->name('desempenhos.create');
Route::post('/desempenhos/{colaboradorId}', [DesempenhoController::class, 'store'])->name('desempenhos.store');
Route::get('/desempenhos/{colaboradorId}/edit', [DesempenhoController::class, 'edit'])->name('desempenhos.edit');
Route::put('/desempenhos/{colaboradorId}', [DesempenhoController::class, 'update'])->name('desempenhos.update');

//rotas relatorio
Route::get('/relatorios/colaboradores', [RelatorioController::class, 'relatorioColaboradores'])->name('relatorios.colaboradores');
Route::get('/relatorios/total-colaboradores-por-unidade', [RelatorioController::class, 'relatorioTotalColaboradoresPorUnidade'])->name('relatorios.total_colaboradores_por_unidade');
Route::get('/relatorios/ranking-colaboradores', [RelatorioController::class, 'relatorioRankingColaboradores'])->name('relatorios.ranking_colaboradores');
