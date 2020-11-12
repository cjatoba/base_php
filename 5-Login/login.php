<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <form action="autenticador.php" method="post">
            <label for="user">Usuário
                <input type="text" name="user" id="user" autofocus>
            </label>
            <label for="pass">Senha
                <input type="password" name="pass" id="pass">
            </label>
            <button type="submit">Entrar</button>
        </form>
    </main>
    <footer>

    </footer>    
</body>
</html>