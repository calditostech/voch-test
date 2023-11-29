@extends('layouts.app')

@section('content')
    <h2>Cadastrar Novo Colaborador</h2>

    <form action="{{ route('colaboradores.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="unidade_id">Unidade:</label>
            <select name="unidade_id" class="form-control" required>
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->id }}">{{ $unidade->nome_fantasia }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="cargo_id">Cargo:</label>
            <select name="cargo_id" class="form-control" required>
                @foreach($cargos as $cargo)
                    <option value="{{ $cargo->id }}">{{ $cargo->cargo }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection
