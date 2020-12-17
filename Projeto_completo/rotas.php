<?php

use App\Controller\{
    CategoriaController, 
    DashboardController, 
    LoginController, 
    ProdutoController,
    UsuarioController
};

try{

    switch($uri_parse)
    {
        //Tela inicial
        case '/':
            DashboardController::index();
        break;

        case '/login':
            LoginController::login();
        break;

        //Rota de login
        case '/autenticar':
            LoginController::autenticar();
        break;

        case '/esqueci_a_senha':
            LoginController::esqueciSenha();
        break;

        case '/enviar_nova_senha':
            LoginController::enviarNovaSenha();
        break;

        case '/sair':
            LoginController::sair();
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
        
        //Rotas para gerenciamento de usuários

        case '/usuario/meus_dados':
            UsuarioController::meusDados();
        break;

        case '/usuario/salvar':
            UsuarioController::salvar();
        break;

        default:
            echo "Rota inválida";
        break;

    }
}catch(Exception $e){
    echo "Erro " . $e->getMessage();
}