<?php
session_start();

// if (!isset($_SESSION["usuario_logado"]))
//     header("Location: login.php");

// if (isset($_GET["sair"])) {
//     unset($_SESSION["usuario_logado"]);
//     header("Location: login.php");
// }

?>

<html>

<head>
    <title>Sistema SC</title>
</head>

    <body>
        <?php include 'includes/cabecalho.php' ?>

        <main>
            Tela inicial
        </main>

        <?php include 'includes/rodape.php' ?>
    </body>

</html>