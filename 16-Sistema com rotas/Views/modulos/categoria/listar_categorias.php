<html>
    <head>
        <title>Sistema Teste</title>
    </head>
    <body>

        <?php include PATH_VIEW . 'includes/cabecalho.php' ?>

        <main>

            <?php if(isset($_GET['excluido'])) : ?>
                <p>Categoria excluída com sucesso!</p>
            <?php endif ?>

            <table>
                <thead>
                    <tr>
                        <th>Ações</th>
                        <th>ID</th>
                        <th>Descrição:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $total_categorias; $i++) : ?>
                        <tr>
                            <td>
                                <a href="/categoria/ver?id=<?= $lista_categorias[$i]->id ?>">Abrir</a></td>
                            <td><?= $lista_categorias[$i]->id ?></td>
                            <td><?= $lista_categorias[$i]->descricao ?></td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </main>

        <?php include PATH_VIEW . '/includes/rodape.php' ?>

    </body>

</html>