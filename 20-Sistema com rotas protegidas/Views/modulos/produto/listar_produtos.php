<html>
    <head>
        <title>Listagem de Produtos</title>
        <?php include PATH_VIEW . 'includes/css_config.php'; ?>
    </head>

    <body>
        <?php include PATH_VIEW . 'includes/cabecalho.php' ?>

        <main class="container mt-5">

            <h4 class="text-center">Lista de produtos</h4>

            <table class="table mt-3 text-center table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Descrição:</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $total_produtos; $i++) : ?>
                        <tr>
                            <td><?= $lista_produtos[$i]->id ?></td>
                            <td><?= $lista_produtos[$i]->descricao ?></td>
                            <td>
                                <a href="/produto/ver?id=<?= $lista_produtos[$i]->id ?>">Abrir</a>
                            </td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>

        </main>

        <?php include PATH_VIEW . 'includes/rodape.php' ?>
        <?php include PATH_VIEW . 'includes/js_config.php' ?>
    </body>
</html>