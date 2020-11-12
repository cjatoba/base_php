<?php

include 'Animal.php';

$novo_gato = new Animal("Cat");
$novo_gato->dorme();
$novo_gato->come("ração");

//Acessando o atributo da classe diretamente
echo $novo_gato->nome;

echo PHP_EOL;
echo PHP_EOL;

$novo_cachoro = new Animal("Dog");
$novo_cachoro->dorme();