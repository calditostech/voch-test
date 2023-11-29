<?php

namespace App\Repositories;

use App\Models\Colaborador;

class ColaboradorRepository
{
    public function getAllWithRelations()
    {
        return Colaborador::with('unidade', 'cargoColaborador')
            ->orderBy('id', 'desc')
            ->get();
    }
    
    public function create(array $data)
    {
        return Colaborador::create($data);
    }

    public function find($id)
    {
        return Colaborador::find($id);
    }

    public function update(Colaborador $colaborador, array $data)
    {
        $colaborador->update($data);
        return $colaborador;
    }

    public function delete(Colaborador $colaborador)
    {
        $colaborador->delete();
    }

    public function getById($id)
    {
        return Colaborador::findOrFail($id);
    }

    public function getAll()
    {
        return Colaborador::all();
    }
}