@extends('layouts.app')

@section('content')
    <h2>Editar Unidade</h2>

    <form action="{{ route('unidades.update', $unidade->id) }}" method="post">
        @csrf
        @method('put') 

        <div class="form-group">
            <label for="nome_fantasia">Nome Fantasia:</label>
            <input type="text" name="nome_fantasia" class="form-control" value="{{ $unidade->nome_fantasia }}" required>
        </div>
        <div class="form-group">
            <label for="razao_social">Razão Social:</label>
            <input type="text" name="razao_social" class="form-control" value="{{ $unidade->razao_social }}" required>
        </div>
        <div class="form-group">
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" class="form-control" value="{{ $unidade->cnpj }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection
