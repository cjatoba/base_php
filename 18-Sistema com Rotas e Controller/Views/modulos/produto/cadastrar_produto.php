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
        <?php include PATH_VIEW . 'includes/cabecalho.php' ?>

        <main>

            <form action="/produto/salvar" method="post">
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
                                
                                <option value="<?= $lista_categorias[$i]->id ?>" <?= $selecionado ?> >
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
                                    $selecionado = $lista_marcas[$i]->id == $dados_produto->id_marca ? "selected" : "";
                            ?>
                            <option value="<?= $lista_marcas[$i]->id ?>" <?= $selecionado ?>>
                                <?= $lista_marcas[$i]->descricao ?>
                            </option>
                        <?php endfor ?>

                    </select>
                </label>

                <?php if (isset($dados_produto)) : ?>
                    <input type="hidden" name="id" value="<?= $dados_produto->id ?>">
                    <a href="/cadastrar/excluir?id=<?= $dados_produto->id ?>">Excluir</a>
                <?php endif ?>

                <button type="submit">Salvar</button>
            </form>

        </main>

        <?php include PATH_VIEW . 'includes/rodape.php' ?>
    </body>
</html>