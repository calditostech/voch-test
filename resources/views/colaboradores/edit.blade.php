@extends('layouts.app')

@section('content')
    <h2>Editar Colaborador</h2>

    <form action="{{ route('colaboradores.update', $colaborador->id) }}" method="post">
        @csrf
        @method('put') {{-- This is used to spoof a PUT request --}}

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" value="{{ $colaborador->nome }}" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" class="form-control" value="{{ $colaborador->cpf }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $colaborador->email }}" required>
        </div>
        <div class="form-group">
            <label for="unidade_id">Unidade:</label>
            <select name="unidade_id" class="form-control" required>
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}" {{ $colaborador->unidade_id == $unidade->id ? 'selected' : '' }}>
                        {{ $unidade->nome_fantasia }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cargo_id">Cargo:</label>
            <select name="cargo_id" class="form-control" required>
                @foreach($cargos as $cargo)
                    <option value="{{ $cargo->id }}" {{ $colaborador->cargo_id == $cargo->id ? 'selected' : '' }}>
                        {{ $cargo->cargo }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection
