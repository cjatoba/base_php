<?php

session_start();

if(!isset($_SESSION["usuario_logado"]))
    header("Location: login.php");

try {

    if(isset($_GET["salvar"]))
    {
    
        include 'DAO/CategoriaDAO.php';

        $categoria_dao = new CategoriaDAO();

        $descricao = $_POST["descricao"];

        $dados_para_inserir = array(
            "descricao" => $_POST["descricao"]
        );

        $categoria_dao->insert($dados_para_inserir);

        echo "Dados inseridos com sucesso!";
    
    }

} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="global">
        <header>
            <h1>Cadastro de Categoria</h1>
        </header>
        <main>
            <form action="cadastrar_categoria.php?salvar=true" method="post">

                <label for="descricao">Descrição da categoria:
                    <input type="text" name="descricao" id="descricao" autofocus>
                </label>

                <button type="submit">Cadastrar</button>
            </form>
        </main>
        <footer>
        </footer>
    </div>
</body>
</html>