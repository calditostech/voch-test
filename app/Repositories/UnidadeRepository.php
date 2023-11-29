<?php

namespace App\Repositories;

use App\Models\Unidade;

class UnidadeRepository
{
    public function create(array $data)
    {
        return Unidade::create($data);
    }

    public function getAll()
    {
        return Unidade::all();
    }

    public function find($id)
    {
        return Unidade::find($id);
    }

    public function update(Unidade $unidade, array $data)
    {
        return $unidade->update($data);
    }
}
