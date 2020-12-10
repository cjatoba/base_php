<?php

try{

    switch($uri_parse)
    {
        //Tela inicial
        case '/':
            include 'Views/home.php';
        break;

        //Rota de login
        case '/logar':
        break;

        case '/sair':
        break;

        //Rotas para trabalhar com produtos
        case '/produto':
            ProdutoController::index();
        break;

        case '/produto/cadastrar':
            ProdutoController::cadastrar();
        break;

        case '/produto/salvar':
            ProdutoController::salvar();
        break;

        case '/produto/ver':
            ProdutoController::ver();
        break;

        case '/produto/excluir':
            ProdutoController::excluir();
        break;

       // Rotas para categorias
       case '/categoria':
            CategoriaController::index();            
       break;

       case '/categoria/cadastrar':
            CategoriaController::cadastrar();
       break;

       case '/categoria/salvar':
            CategoriaController::salvar();
       break;

       case '/categoria/ver':
            CategoriaController::ver();
       break;

       case '/categoria/excluir':
            CategoriaController::excluir();
       break;

        default:
            echo "Rota inválida";
        break;
    }
}catch(Exception $e){
    echo "Erro " . $e->getMessage();
}