<?php

//Quando uma classe é abstrata não permite a instância de objetos a partir dela
//é necessário criar classes que extendam a classe Animal para conseguir instanciar
abstract class Animal
{

    //Modificadorfes de acesso
    //public permite o acesso de dentro da classe, pelas classes filhas e pelos objetos
    //protected só permite o acesso ao atributo pelas classes filhas
    //private só permite o acesso ao atributo dentro da classe atual
    protected $nome;
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
