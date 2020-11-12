<?php 

include_once 'Animal.php';

//Herança, nessa caso a classe Gato herda todos os atributos e métodos da classe Animal
class Gato extends Animal
{

    public function miar()
    {
        echo $this->nome . " está miando";
    }
}