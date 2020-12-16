<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Esqueci a senha</title>
    <meta charset="UTF-8">
    <?php include PATH_VIEW . 'includes/css_config.php'; ?>
</head>

<body>
    <div id='global'>
        <header class="container mt-3">
            <div class="row mb-3">
                <div class="col-md-9">
                    <h1>
                        SDC
                        <small>Sistema de Controle</small>
                    </h1>
                </div>
            </div>
            <main class='container mt-3'>

                <div class="m-auto w-50">
                    <form action="/enviar_nova_senha" method="post">

                        <?php if(isset($retorno)) : ?>
                            <div class="alert alert-warning" role="alert">
                                <?= $retorno ?>
                            </div>
                        <?php endif ?>

                        <div class='form-group'>
                            <label for="email">E-mail</label>
                            <input class='form-control' type="email" name="email" id="email" autofocus>
                        </div>

                        <button class='btn btn-success' type="submit">Enviar nova senha</button>
                        <a href="/login" class="btn">Voltar</a>

                    </form>
                </div>
            </main>

            <?php include 'includes/rodape.php' ?>
    </div>
    <?php include PATH_VIEW . 'includes/js_config.php' ?>
</body>

</html>