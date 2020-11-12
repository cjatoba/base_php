<?php 

$lista_nome = [];

$lista_nome[] = "João";
$lista_nome[] = "José";
$lista_nome[] = "Maria";
$lista_nome[] = "Marta";

echo "<hr />";

//Quantidade de elementos do array
echo "Quantidade de elementos do array:". count($lista_nome);

echo "<hr />";

$total_lista_nome = count($lista_nome);

for($i=0; $i<$total_lista_nome; $i++)
{
    echo "Loop[$i]= ". $lista_nome[$i];
    echo "<hr />";
}