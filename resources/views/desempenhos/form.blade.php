@extends('layouts.app')

@section('content')
    <h2>Cadastro/Update de Desempenho para {{ $colaborador->nome }}</h2>

    <form action="{{ route('desempenho.store', $colaborador->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nota_desempenho">Nota de Desempenho:</label>
            <input type="number" name="nota_desempenho" class="form-control" min="0" max="10" step="0.1" required>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar/Atualizar Desempenho</button>
    </form>
@endsection
