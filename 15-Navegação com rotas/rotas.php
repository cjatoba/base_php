<?php

try{

    switch($uri_parse)
    {
        case '/':
            echo "Tela inicial";
        break;

        case '/produto':
            include 'Views/modulos/produto/listar_produtos.php';
        break;

        case '/produto/salvar':
            include 'Views/modulos/produto/cadastrar_produto.php';
        break;

        case '/produto/remover':
            echo "Remover produto";
        break;

        case '/categoria':
            include 'Views/modulos/categoria/listar_categorias.php';
        break;

        case '/categoria/salvar':
            include 'Views/modulos/categoria/cadastrar_categoria.php';
        break;

        case '/categoria/remover':
            echo "Remover categoria";
        break;

        case '/marca':
            include 'Views/modulos/marca/listar_marcas.php';
        break;

        case '/marca/salvar':
            include 'Views/modulos/cadastrar_marca.php';
        break;

        case '/marca/remover':
            echo 'Remover marca';
        break;

        default:
            echo "Rota inválida";
        break;
    }
}catch(Exception $e){
    echo "Erro " . $e->getMessage();
}