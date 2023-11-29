@extends('layouts.app')

@section('content')
    <h2>Lista de Colaboradores</h2>
    
    <a href="{{ route('colaboradores.create') }}" class="btn btn-success">Cadastrar Novo Colaborador</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Unidade</th>
                <th>Cargo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colaboradores as $colaborador)
                <tr>
                    <td>{{ $colaborador->id }}</td>
                    <td>{{ $colaborador->nome }}</td>
                    <td>{{ $colaborador->cpf }}</td>
                    <td>{{ $colaborador->email }}</td>
                    <td>{{ $colaborador->unidade->nome_fantasia }}</td>
                    <td>{{ optional($colaborador->cargo)->cargo }}</td>
                    <td>
                        <a href="{{ route('colaboradores.edit', $colaborador->id) }}" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
