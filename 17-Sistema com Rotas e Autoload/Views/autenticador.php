<?php

session_start();

try {

    include 'DAO/MySQL.php';

    $mysql = new MySQL();

    $sql = "SELECT id, nome FROM usuarios WHERE usuario = ? AND senha = ?";

    $stmt = $mysql->prepare($sql);

    $stmt->bindValue(1, $_POST["user"]);
    $stmt->bindValue(2, sha1($_POST["pass"]));

    $stmt->execute();

    $dados_de_usuario = $stmt->fetchObject();

    if($dados_de_usuario)
    {
        $_SESSION["usuario_logado"] = $dados_de_usuario->id;
        header("Location: index.php");
    }else{
        header("Location: login.php?falhou=true");
    }

} catch (Exception $e) {
    echo $e->getMessage();
}