<?php

try {

    include '../../DAO/CategoriaDAO.php';

    $categoria_dao = new CategoriaDAO();

    $lista_categorias = $categoria_dao->getAllRows();

    $total_categorias = count($lista_categorias);
    
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

<html>
    <head>
        <title>Cadastro de Produtos</title>

        <style>
            label, input, select {
                display: block;
                padding: 5px;
            }
        </style>
    </head>

    <body>
        <?php include '../../includes/cabecalho.php' ?>

        <main>

            <form action="cadastrar_produto.php?salvar=true" method="post">
                <label for="descricao">Descrição do produto:
                    <input type="text" name="descricao" id="descricao" autofocus>
                </label>

                <label for="preco">Preço:
                    <input type="number" name="preco" id="preco">
                </label>

                <label for="categoria">Categoria:
                    <select name="categoria" id="categoria">
                        <option>Selecione uma categoria</option>

                        <?php for ($i = 0; $i < $total_categorias; $i++) : ?>
                            <option value="<?= $lista_categorias[$i]->id ?>"><?= $lista_categorias[$i]->descricao ?></option>
                        <?php endfor ?>
                    </select>
                </label>

                <label for="marca">Marca:
                    <select name="marca" id="marca">
                        <option>Selecione uma marca</option>
                        <option value="1">TEste</option>
                    </select>
                </label>

                <button type="submit">Cadastrar</button>
            </form>

        </main>

        <?php include '../../includes/rodape.php' ?>
    </body>
</html>