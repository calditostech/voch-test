@extends('layouts.app')

@section('content')
    <h2>Total de Colaboradores por Unidade</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Nome Fantasia</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Total de Colaboradores</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unidades as $unidade)
                <tr>
                    <td>{{ $unidade->nome_fantasia }}</td>
                    <td>{{ $unidade->razao_social }}</td>
                    <td>{{ $unidade->cnpj }}</td>
                    <td>{{ $unidade->colaboradores_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
