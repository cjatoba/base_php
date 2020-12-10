<?php 

if(!isset($_SESSION)) session_start();

try {

    //
    // $caminho_base = dirname(__FILE__);

    // $caminho = dirname(__FILE__) . '../DAO/MySQL.php';

    // echo $caminho;

include_once PATH_DAO . 'MySQL.php';

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

<header>
    <h1>
        SDC
        <small>Sistema de Controle</small>
    </h1>

    <fieldset>
        <legend>Dados do usuário</legend>
        Bem vindo <strong> <?= $dados_de_usuario->nome ?> você está na área restrita </strong> | <a href="index.php?sair=true">Sair</a>
    </fieldset>

    <nav>
        <ul>
            <li><a href="/">Tela Inicial</a></li>

            <li><a href="/categoria/cadastrar">Cadastrar Categoria</a></li>
            <li><a href="/categoria">Listar Categoria</a></li>

            <li><a href="#">Cadastrar Marca</a></li>
            <li><a href="#">Listar Marca</a></li>

            <li><a href="/produto/cadastrar">Cadastrar Produto</a></li>
            <li><a href="/produto">Listar Produto</a></li>
        </ul>
    </nav>
    <hr>
</header>