<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload simples de arquivos</title>
</head>
<body>
    <div id="global">
        <header>
            <h1>Upload simples de arquivos</h1>
        </header>
        <main>
            <form method="post" action="up_simples_melhorado.php" enctype="multipart/form-data">
                <label for="arquivo_up">Arquivo
                    <input type="file" name="arquivo_up" id="arquivo_up">
                </label>
                <button type="submit">Enviar</button>
            </form>
        </main>
        <footer>
        </footer>
    </div>    
</body>
</html>