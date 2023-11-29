<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargos';

    protected $fillable = ['id', 'cargo'];

    public function colaboradores()
    {
        return $this->hasMany(Colaborador::class);
    }
}
