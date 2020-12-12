<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Categoria</title>
    <?php include PATH_VIEW . 'includes/css_config.php'; ?>
</head>

<body>
    <?php include PATH_VIEW . 'includes/cabecalho.php' ?>
    <main class="container mt-3">
    
        <h4 class="text-center">Cadastro de categoria</h4>

        <form action="/categoria/salvar" method="post">

            <div class="form-group">
                <label for="descricao">Descrição da categoria:</label>
                <input type="text" class="form-control" name="descricao" id="descricao" value="<?= isset($dados_categoria) ? $dados_categoria->descricao : "" ?>" autofocus>
            </div>

            <?php if (isset($dados_categoria)) : ?>
                <input type="hidden" name="id" value="<?= $dados_categoria->id ?>">
                <a href="/categoria/excluir?id=<?= $dados_categoria->id ?>" class="btn btn-danger">Excluir</a>
            <?php endif ?>

            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </main>
    
    <?php include PATH_VIEW . 'includes/rodape.php' ?>
    <?php include PATH_VIEW . 'includes/js_config.php' ?>
</body>

</html>