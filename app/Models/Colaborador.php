<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';

    protected $fillable = ['unidade_id', 'nome', 'cpf', 'email'];

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    public function cargoColaborador()
    {  
        return $this->hasOne(CargoColaborador::class, 'colaborador_id');
    }
    
    public function cargo()
    {
        return $this->hasOneThrough(Cargo::class, CargoColaborador::class, 'colaborador_id', 'id', 'id', 'cargo_id');
    }
}
