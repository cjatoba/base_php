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
        <form action="/categoria/salvar" method="post">

            <label for="descricao">Descrição da categoria:
                <input type="text" name="descricao" id="descricao" value="<?= isset($dados_categoria) ? $dados_categoria->descricao : "" ?>" autofocus>

                <?php if (isset($dados_categoria)) : ?>
                    <input type="hidden" name="id" value="<?= $dados_categoria->id ?>">
                    <a href="/categoria/excluir?id=<?= $dados_categoria->id ?>">Excluir</a>
                <?php endif ?>
            </label>

            <button type="submit">Cadastrar</button>
        </form>
    </main>
    <?php include PATH_VIEW . 'includes/rodape.php' ?>
</body>

</html>