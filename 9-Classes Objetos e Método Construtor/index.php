<?php

// include 'Animal.php';

// $novo_gato = new Animal("Cat");
// $novo_gato->dorme();
// $novo_gato->come("ração");

// //Acessando o atributo da classe diretamente
// echo $novo_gato->nome;

// echo PHP_EOL;
// echo PHP_EOL;

// $novo_cachoro = new Animal("Dog");
// $novo_cachoro->dorme();

try{
    include 'Gato.php';
    
    $novo_gato = new Gato("Cat2");
    $novo_gato->come("Feijão");
    $novo_gato->dorme();
    $novo_gato->miar();

    echo PHP_EOL;
    echo PHP_EOL;

    include 'Cachorro.php';

    $cachorro_novo = new Cachorro("Dog");
    $cachorro_novo->come("Osso");
    $cachorro_novo->dorme();
    $cachorro_novo->latir();

} catch(Exception $e){
    echo $e->getMessage();
}