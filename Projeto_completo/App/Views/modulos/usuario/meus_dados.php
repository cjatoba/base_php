<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Meus dados</title>
    <?php include PATH_VIEW . 'includes/css_config.php'; ?>
</head>
<body>
    <?php include PATH_VIEW . 'includes/cabecalho.php' ?>

    <main class="container mt-3">
    
        <h4 class="text-center">
            Meus dados
        </h4>

        <form action="/usuario/salvar" method="post">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="<?= isset($meus_dados) ? $meus_dados->nome : "" ?>" autofocus>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">E-mail:</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?= isset($meus_dados) ? $meus_dados->email : "" ?>" autofocus>
                </div>
            </div>

            <fieldset>
                <legend>
                    Trocar a senha:
                </legend>            

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nova_senha">Nova Senha:</label>
                        <input type="password" class="form-control" name="nova_senha" id="nova_senha" autofocus>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="confirmacao_nova_senha">Confirme a Nova Senha:</label>
                        <input type="password" class="form-control" name="confirmacao_nova_senha" id="confirmacao_nova_senha" autofocus>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>
                    Senha atual:
                </legend>  
                <div class="form-group">
                    <label for="senha_atual">Senha Atual:</label>
                    <input type="password" class="form-control" name="senha_atual" id="senha_atual" autofocus>
                </div>
            </fieldset>
        
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </main>
    
    <?php include PATH_VIEW . 'includes/rodape.php' ?>
    <?php include PATH_VIEW . 'includes/js_config.php' ?>
</body>

</html>