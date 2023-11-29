<?php

namespace App\Repositories;

use App\Models\Cargo;

class CargoRepository
{
    public function getAll()
    {
        return Cargo::all();
    }

    public function getById($id)
    {
        return Cargo::find($id);
    }

    public function create(array $data)
    {
        return Cargo::create($data);
    }

    public function update(array $data, Cargo $cargo)
    {
        $cargo->update($data);
        return $cargo;
    }

    public function delete(Cargo $cargo)
    {
        $cargo->delete();
    }
}
