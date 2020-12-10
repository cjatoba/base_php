<html>
    <head>
        <title>Sistema Teste</title>
    <?php include PATH_VIEW . 'includes/css_config.php'; ?>
    </head>
    <body>

        <?php include PATH_VIEW . 'includes/cabecalho.php' ?>

        <main class="container mt-5">

            <?php if(isset($_GET['excluido'])) : ?>
                <p>Categoria excluída com sucesso!</p>
            <?php endif ?>

            <h4 class="text-center">Lista de categorias</h4>

            <table class="table mt-3 text-center table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Descrição:</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $total_categorias; $i++) : ?>
                        <tr>
                            <td><?= $lista_categorias[$i]->id ?></td>
                            <td><?= $lista_categorias[$i]->descricao ?></td>
                            <td>
                                <a href="/categoria/ver?id=<?= $lista_categorias[$i]->id ?>">Abrir</a>
                            </td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </main>

        <?php include PATH_VIEW . '/includes/rodape.php' ?>
        <?php include PATH_VIEW . 'includes/js_config.php' ?>
    </body>

</html>