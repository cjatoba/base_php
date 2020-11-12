<?php 

class CategoriaDAO
{
    private $conexao;

    /**
     * Criar um novo objeto para o CRUD de categorias
     */
    public function __construct()
    {
        include 'MySQL.php';

        $this->conexao = new MySQL();
    }

    public function getById($id)
    {

    }

    /**
     * Retorna todos os dados da tabela categoria
     */
    public function getAllRows()
    {
        $stmt = $this->conexao->prepare("SELECT * FROM categoria");
        $stmt->execute();

        $arr_categorias = array();

        while($c = $stmt->fetchObject()){
            $arr_categorias[] = $c;
        }

        return $arr_categorias;
    }

    /**
     * Método para inserir um novo registro natabela categoria
     */
    public function insert($dados_dategoria)
    {
        $sql = "INSERT INTO categoria (descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $dados_dategoria["descricao"]);
        $stmt->execute();
    }

    public function update($dados_dategoria)
    {

    }

    public function delete($id)
    {

    }

}