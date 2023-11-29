<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Aplicação</title>
    <!-- Adicione os estilos do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Adicione seus estilos CSS aqui, se necessário -->
</head>
<body>

    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Teste Aplicação Voch</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('unidades.index') }}">Lista de Unidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('colaboradores.index') }}">Lista de Colaboradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('relatorios.colaboradores') }}">Relatório de Colaboradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('relatorios.total_colaboradores_por_unidade') }}">Total de Colaboradores por Unidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('relatorios.ranking_colaboradores') }}">Ranking de Colaboradores Melhores Avaliados</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <!-- Adicione o jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Adicione o Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <!-- Adicione os scripts do Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Adicione seus scripts JavaScript aqui, se necessário -->

</body>
</html>

