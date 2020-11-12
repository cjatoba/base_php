<?php 

$lista_nome = array("João", "Maria", "José", "Mario");

//Resetando o índice interno
//E uma boa prática resetar o array antes de iterar
reset($lista_nome);

//O while funciona mais rápido que o for e o for mais rápido que o foreach
while(key($lista_nome) !== null){

    //current pela o valor do indíce atual do array
    echo "Oi". current($lista_nome) . "<br />";

    //next avança para o próximo índice do array
    next($lista_nome);

}

echo "<hr />";

foreach ($lista_nome as $nome) {
    echo "Oi". $nome . "<br />";
}

echo "<hr />";