<?php

//O include_onde verifica se já houve um include anterior e somente se não houver
//inclue o arquivo
include_once 'Animal.php';

class Cachorro extends Animal
{

    public function latir()
    {
        echo $this->nome . " está latindo";
    }

}