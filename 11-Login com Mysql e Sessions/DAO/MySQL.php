<?php 

class MySQL extends PDO
{

    private $host = "localhost";
    private $usuario = "root";
    private $senha = "@MySQL_dev_2020";
    private $db = "sistema_revisao";

    private $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    public function __construct()
    {
        //Declarar o dsn (Data Source Name)
        $dsn = "mysql:host=$this->host;dbname=$this->db";
        
        //PDO (PHP Data Object)
        return parent::__construct($dsn, $this->usuario, $this->senha, $this->opcoes);
    }

}