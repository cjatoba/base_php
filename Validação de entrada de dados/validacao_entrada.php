<?php

//O bloco try captura as exceções ocorridas nele
try{

    //Verificada se o parametro1 não existe ou está vazio
    if(!empty($_GET["parametro1"]))
    {
        //Verifica se o tamanho da string contida eno parametro1 é menor que 3
        if(strlen($_GET["parametro1"]) < 3)
            throw new Exception("Texto do paramatro1 menor que 3");
    }else{
        throw new Exception("Parametro1 vazio ou inexistente");
    }

    if(empty($_GET["parametro2"]))
        throw new Exception("Parâmetro2 vazio");
    
    $nome = $_GET["parametro1"];
    $idade = $_GET["parametro2"];
    
    $frase = "Seu nome é ".$nome;
    $frase .= " você tem ".$idade." anos";
    
    echo $frase;
    
//O bloco catch é chamado caso ocorra alguma exceção
} catch(Exception $e){
    echo $e->getMessage();
}