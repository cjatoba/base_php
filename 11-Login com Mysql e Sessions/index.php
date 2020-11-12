<?php 
session_start();

if(!isset($_SESSION["usuario_logado"]))
    header("Location: login.php");
    
if(isset($_GET["sair"]))
{
    unset($_SESSION["usuario_logado"]);
    header("Location: login.php");
}

try {

    include 'DAO/MySQL.php';

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

<h1>Bem vindo <strong> <?= $dados_de_usuario->nome ?> </strong></h1>

<a href="index.php?sair=true">Sair</a>