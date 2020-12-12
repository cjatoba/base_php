<html>

<head>
    <title>Cadastro de Produtos</title>
    <?php include PATH_VIEW . 'includes/css_config.php'; ?>
</head>

<body>
    <?php include PATH_VIEW . 'includes/cabecalho.php' ?>

    <main class="container mt-3">

        <h4 class="text-center">Cadastro de produto</h4>

        <form action="/produto/salvar" method="post">

            <div class="form-group">
                <label for="descricao">Descrição do produto:</label>
                <input type="text" class="form-control" name="descricao" id="descricao"
                        value="<?= isset($dados_produto) ? $dados_produto->descricao : "" ?>" autofocus>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="preco">Preço:</label>
                    <input type="number" class="form-control" name="preco" id="preco"
                            value="<?= isset($dados_produto) ? $dados_produto->preco : "" ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="foto">Foto:</label>
                    <input type="file" id="foto" name="foto" class="form-control-file">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="categoria">Categoria:</label>
                    <select name="id_categoria" id="id_categoria" class="form-control">
                        <option>Selecione uma categoria</option>

                        <?php 
                            
                                for ($i=0; $i < $total_categorias ; $i++): 
                                
                                    $selecionado = "";

                                    if(isset($dados_produto->id))
                                        $selecionado = $lista_categorias[$i]->id == $dados_produto->id_categoria ? "selected" : "";
                                ?>

                        <option value="<?= $lista_categorias[$i]->id ?>" <?= $selecionado ?>>
                            <?= $lista_categorias[$i]->descricao ?>
                        </option>
                        <?php endfor ?>

                    </select>                    
                </div>
    
                <div class="form-group col-md-6">
                    <label for="id_marca">Marca:</label>
                    <select name="id_marca" id="id_marca" class="form-control">
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
                </div>
            </div>


            <?php if (isset($dados_produto)) : ?>
            <input type="hidden" name="id" value="<?= $dados_produto->id ?>">
            <a href="/cadastrar/excluir?id=<?= $dados_produto->id ?>" class="btn btn-danger">Excluir</a>
            <?php endif ?>

            <button type="submit" class="btn btn-success">Salvar</button>
        </form>

    </main>

    <?php include PATH_VIEW . 'includes/rodape.php' ?>
    <?php include PATH_VIEW . 'includes/js_config.php' ?>
</body>

</html>