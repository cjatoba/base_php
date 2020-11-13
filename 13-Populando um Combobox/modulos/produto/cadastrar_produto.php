<?php

try {

    /**
     * Obtendo as categorias
     */
    include '../../DAO/CategoriaDAO.php';
    $categoria_dao = new CategoriaDAO();
    $lista_categorias = $categoria_dao->getAllRows();
    $total_categorias = count($lista_categorias);
    
    /**
     * Obtendo as marcas
     */
    include '../../DAO/MarcaDAO.php';
    $marca_dao = new MarcaDAO();
    $lista_marcas = $marca_dao->getAllRows();
    $total_marcas = count($lista_marcas);

    /**
     * Salvando um produto no banco
     */
    if (isset($_GET["salvar"])) {

        include '../../DAO/ProdutoDAO.php';

        $produto_dao = new ProdutoDAO();

        $dados_para_salvar = array(
            "id_marca" => $_POST["id_marca"],
            "id_categoria" => $_POST["id_categoria"],
            "descricao" => $_POST["descricao"],
            "preco" => $_POST["preco"]
        );

        if (isset($_POST["id"])) {
            $dados_para_salvar["id"] = $_POST["id"];

            $produto_dao->update($dados_para_salvar);

            echo "Dados atualizados com sucesso!";
        } else {

            $produto_dao->insert($dados_para_salvar);

            echo "Dados inseridos com sucesso!";
        }
    }

    /**
     * Excluir um produto
     */

    if (isset($_GET["excluir"])) {

        include '../../DAO/ProdutoDAO.php';
        $produto_dao = new ProdutoDAO();

        $produto_dao->delete($_GET["id"]);

        header("Location: listar_produtos.php");
    }

    if (isset($_GET["id"])) {

        include '../../DAO/ProdutoDAO.php';
        $produto_dao = new ProdutoDAO();

        $dados_produto = $produto_dao->getById($_GET["id"]);
    }

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
                    <input type="text" name="descricao" id="descricao" value="<?= isset($dados_produto) ? $dados_produto->descricao : "" ?>" autofocus>
                </label>

                <label for="preco">Preço:
                    <input type="number" name="preco" id="preco" value="<?= isset($dados_produto) ? $dados_produto->preco : "" ?>">
                </label>

                <label for="categoria">Categoria:
                    <select name="id_categoria" id="id_categoria">
                        <option>Selecione uma categoria</option>

                            <?php 
                            
                                for ($i=0; $i < $total_categorias ; $i++): 
                                
                                    $selecionado = "";

                                    if(isset($dados_produto->id))
                                        $selecionado = $lista_categorias[$i]->id == $dados_produto->id_categoria ? "selected" : "";
                                ?>
                                
                                <option
                                    <?= $selecionado ?>
                                    value="<?= $lista_categorias[$i]->id ?>">
                                    <?= $lista_categorias[$i]->descricao ?>
                                </option>
                            
                            <?php endfor ?>
                        
                    </select>
                </label>

                <label for="id_marca">Marca:
                    <select name="id_marca" id="id_marca">
                        <option>Selecione uma marca</option>

                        <?php 
                        
                            for ($i=0; $i < $total_marcas ; $i++): 
                                    
                                $selecionado = "";

                                if(isset($dados_produto->id))
                                    $selecionado = $lista_categorias[$i]->id == $dados_produto->id_marca ? "selected" : "";
                            ?>
                            <option 
                                <?= $selecionado ?>
                                value="<?= $lista_marcas[$i]->id ?>">
                                <?= $lista_marcas[$i]->descricao ?>
                            </option>
                        <?php endfor ?>

                    </select>
                </label>

                <?php if (isset($dados_produto)) : ?>
                    <input type="hidden" name="id" value="<?= $dados_produto->id ?>">
                    <a href="cadastrar_produto.php?excluir=true&id=<?= $dados_produto->id ?>">Excluir</a>
                <?php endif ?>

                <button type="submit">Salvar</button>
            </form>

        </main>

        <?php include '../../includes/rodape.php' ?>
    </body>
</html>