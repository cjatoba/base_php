<?php

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
        <?php include PATH_VIEW . 'includes/css_config.php'; ?>
    </head>
    <body>
        <?php include 'includes/cabecalho.php' ?>

        <main>
            Tela inicial
        </main>

        <?php include 'includes/rodape.php' ?>
        <?php include PATH_VIEW . 'includes/js_config.php' ?>
    </body>
</html>