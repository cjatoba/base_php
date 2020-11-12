<?php

include 'Gato.php';

// $gato1 = new Gato("Cat1");
// $gato2 = new Gato("Cat2");
// $gato3 = new Gato("Cat3");

// $arr_gatos = array(
//     new Gato("Cat1"),
//     new Gato("Cat2"),
//     new Gato("Cat3")
// );

$arr_gatos[] = new Gato("Cat1");
$arr_gatos[] = new Gato("Cat2");
$arr_gatos[] = new Gato("Cat3");

$arr_gatos_size = count($arr_gatos);

echo "<hr />";

//Listando o conteúdo de um array de objeto
for($i=0; $i<$arr_gatos_size; $i++){
    echo "O gato da posição " . $i . " é " . $arr_gatos[$i]->nome . " <br />";
}

echo "<hr />";

include "Cachorro.php";

//Declaração de array do bd ficticio
$simulacao_de_dados_do_banco = array("Dog1", "Dog2", "Dog3");
$simulacao_de_dados_do_banco_size = sizeof($simulacao_de_dados_do_banco);

//Array de objetos cacchorro
$arr_cachorros = array();

//Preenchendo um array de objetos
for($i=0; $i<$simulacao_de_dados_do_banco_size; $i++)
{
    $arr_cachorros[] = new Cachorro($simulacao_de_dados_do_banco[$i]);
}

//Listando os objetos cachorro

$arr_cachorro_size = sizeof($arr_cachorros);

for ($i=0; $i < $arr_cachorro_size; $i++) { 
    echo "O cachorro da posição $i é " . $arr_cachorros[$i]->nome . " <br />";
}

echo "<hr />";