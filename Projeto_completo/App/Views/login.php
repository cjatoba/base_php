<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Login</title>
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
                    <form action="/autenticar" method="post">

                        <div class='form-group'>
                            <label for="user">Usuário</label>
                            <input class='form-control' type="text" name="user" id="user" value="<?= $usuario ?>" autofocus>
                        </div>

                        <div class='form-group'>
                            <label for="pass">Senha</label>
                            <input class='form-control' type="password" name="pass" id="pass">
                        </div>

                        <div class='form-group'>
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Lembrar usuário</label>
                        </div>

                        <div class='form-group'>
                            <button class='btn btn-success' type="submit">Entrar</button>
                            <a class="btn" href="/esqueci_a_senha">Esqueci a senha</a>
                        </div>
                    </form>
                </div>
            </main>

            <?php include 'includes/rodape.php' ?>
    </div>
    <?php include PATH_VIEW . 'includes/js_config.php' ?>
</body>

</html>