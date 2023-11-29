@extends('layouts.app')

@section('content')
    <h2>Lista de Unidades</h2>
    
    <a href="{{ route('unidades.create') }}" class="btn btn-success">Cadastrar Nova Unidade</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Fantasia</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unidades as $unidade)
                <tr>
                    <td>{{ $unidade->id }}</td>
                    <td>{{ $unidade->nome_fantasia }}</td>
                    <td>{{ $unidade->razao_social }}</td>
                    <td>{{ $unidade->cnpj }}</td>
                    <td>
                        <a href="{{ route('unidades.edit', $unidade->id) }}" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
