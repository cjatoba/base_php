<?php

session_start();

try {
    
    $usuario_certo = "teste";
    $senha_certa = "123";

    $usuario_digitado = $_POST["user"];
    $senha_digitada = $_POST["pass"];

    if($usuario_digitado === $usuario_certo)
    {
        if($senha_digitada === $senha_certa)
        {

            $_SESSION["usuario_logado"] = $usuario_digitado;
            header("Location: index.php");

        }else{
            header("Location: login.php?falhou=true");
        }
    }else{
        header("Location: login.php?falhou=true");
    }

} catch (Exception $e) {
    echo $e->getMessage();
}