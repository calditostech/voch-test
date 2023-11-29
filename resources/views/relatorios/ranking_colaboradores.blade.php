@extends('layouts.app')

@section('content')
    <h2>Ranking de Colaboradores Melhores Avaliados</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Unidade</th>
                <th>Cargo</th>
                <th>Nota de Desempenho</th>
            </tr>
        </thead>
        <tbody>
            @foreach($colaboradoresRanking as $desempenho)
                <tr>
                    <td>{{ $desempenho->colaborador->nome }}</td>
                    <td>{{ $desempenho->colaborador->cpf }}</td>
                    <td>{{ $desempenho->colaborador->email }}</td>
                    <td>{{ $desempenho->colaborador->unidade->nome_fantasia }}</td>
                    <td>{{ $desempenho->colaborador->cargo->cargo }}</td>
                    <td>{{ $desempenho->nota_desempenho }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
