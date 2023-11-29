@extends('layouts.app')

@section('content')
    <h2>Relatório de Colaboradores</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Unidade</th>
                <th>Cargo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colaboradores as $colaborador)
                <tr>
                    <td>{{ $colaborador->nome }}</td>
                    <td>{{ $colaborador->cpf }}</td>
                    <td>{{ $colaborador->email }}</td>
                    <td>{{ $colaborador->unidade->nome_fantasia }}</td>
                    <td>{{ optional($colaborador->cargo)->cargo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
