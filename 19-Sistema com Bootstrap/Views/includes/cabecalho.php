<?php 

try {

    //
    // $caminho_base = dirname(__FILE__);

    // $caminho = dirname(__FILE__) . '../DAO/MySQL.php';

    // echo $caminho;

// include_once PATH_DAO . 'MySQL.php';

$mysql = new MySQL();

$stmt = $mysql->prepare("SELECT * FROM usuarios WHERE id=:id");

$stmt->execute(
    array(
        "id" => $_SESSION["usuario_logado"]
    )
);

$dados_de_usuario = $stmt->fetchObject();

} catch (Exception $e) {
echo $e->getMessage();
}

?>

<header class="container mt-3">
    <div class="row mb-3">
        <div class="col-md-9">
            <h1>
                SDC
                <small>Sistema de Controle</small>
            </h1>
        </div>
        <div class="col-sm">
            <fieldset>
                <legend>Dados do usuário</legend>
                Bem vindo <strong> <?= $dados_de_usuario->nome ?> </strong> você está na área restrita
                <a class="btn btn-dark" href="index.php?sair=true">Sair</a>
            </fieldset>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Tela Inicial</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categoria
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/categoria/cadastrar">Cadastrar Categoria</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/categoria">Listar Categoria</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Marca
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Cadastrar Marca</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Listar Marca</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Produto
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-divider" href="/produto/cadastrar">Cadastrar Produto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-divider" href="/produto">Listar Produto</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>