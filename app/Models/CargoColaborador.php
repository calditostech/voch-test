<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoColaborador extends Model
{
    use HasFactory;

    protected $table = 'cargo_colaborador';

    protected $fillable = ['id', 'cargo_id', 'colaborador_id', 'nota_desempenho'];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class);
    }
}
