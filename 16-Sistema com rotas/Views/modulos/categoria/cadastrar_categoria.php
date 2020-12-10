<?php

session_start();

if (!isset($_SESSION["usuario_logado"]))
    header("Location: login.php");

try {

    if (isset($_GET["salvar"])) {

        include PATH_DAO . 'CategoriaDAO.php';

        $categoria_dao = new CategoriaDAO();

        $dados_para_salvar = array(
            "descricao" => $_POST["descricao"]
        );

        if (isset($_POST["id"])) {
            $dados_para_salvar["id"] = $_POST["id"];

            $categoria_dao->update($dados_para_salvar);

            echo "Dados atualizados com sucesso!";
        } else {

            $categoria_dao->insert($dados_para_salvar);

            echo "Dados inseridos com sucesso!";
        }
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
    <?php include PATH_VIEW . 'includes/cabecalho.php' ?>
    <main>
        <form action="cadastrar_categoria.php?salvar=true" method="post">

            <label for="descricao">Descrição da categoria:
                <input type="text" name="descricao" id="descricao" value="<?= isset($dados_categoria) ? $dados_categoria->descricao : "" ?>" autofocus>

                <?php if (isset($dados_categoria)) : ?>
                    <input type="hidden" name="id" value="<?= $dados_categoria->id ?>">
                    <a href="cadastrar_categoria.php?excluir=true&id=<?= $dados_categoria->id ?>">Excluir</a>
                <?php endif ?>
            </label>

            <button type="submit">Cadastrar</button>
        </form>
    </main>
    <?php include PATH_VIEW . 'includes/rodape.php' ?>
</body>

</html>