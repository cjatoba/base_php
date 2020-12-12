<?php

spl_autoload_register(function ($class){

    //ajuste para funcionamento no Windows
    //Usar a função str_replace para substituir a \ do Windows por /
    $path_to_file = str_replace('\\', '/', $class) . '.php';

    if(file_exists($path_to_file)){
        require $class . '.php';
    }

});

// require 'MinhasClasses/MySQL.php';

$teste = new MinhasClasses\MySQL();

// require 'ClassesDeTerceiros/MySQL.php';

$terceiros = new ClassesDeTerceiros\MySQL();