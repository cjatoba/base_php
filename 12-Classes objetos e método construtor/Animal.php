<?php

class Animal
{

    public $nome;
    public $cor;
    public $raca;

    //E uma boa prática utilizar _ antes do nome dos parâmetros
    //para diferenciar de outras variáveis
    public function __construct($_nome)
    {
        $this->nome = $_nome;
    }

    public function dorme()
    {
        //PHP_EOL quebra uma linha
        echo $this->nome . " está dormindo" . PHP_EOL;
    }

    public function come($_comida)
    {
        echo $this->nome . " está comendo " . $_comida . PHP_EOL;
    }
}
