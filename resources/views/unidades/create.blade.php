@extends('layouts.app')

@section('content')
    <h2>Cadastrar Nova Unidade</h2>

    <form action="{{ route('unidades.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome_fantasia">Nome Fantasia:</label>
            <input type="text" name="nome_fantasia" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="razao_social">Razão Social:</label>
            <input type="text" name="razao_social" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection
