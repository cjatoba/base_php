<?php

//Recebe os valores passados via GET, passados na query string como no exemplo de url abaixo
//http://localhost:8000/variaveis_superglobais.php?parametro1=Jo%C3%A3o&parametro2=22
$nome = $_GET["parametro1"];

$idade = $_GET["parametro2"];

$frase = "Seu nome é ".$nome;
$frase .= " você tem ".$idade." anos";

echo $frase;