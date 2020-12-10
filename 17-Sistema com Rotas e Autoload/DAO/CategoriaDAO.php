<?php 

class CategoriaDAO
{
    private $conexao;

    /**
     * Criar um novo objeto para o CRUD de categorias
     */
    public function __construct()
    {
        include_once 'MySQL.php';

        $this->conexao = new MySQL();
    }

    /**
     * Retorna um registro específico da tabela categoria
     */
    public function getById($id)
    {
        $stmt = $this->conexao->prepare("SELECT * FROM categoria WHERE id = ?");

        $stmt->bindParam(1,$id);

        $stmt->execute();

        return $stmt->fetchObject();
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
    public function insert($dados_da_categoria)
    {
        $sql = "INSERT INTO categoria (descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $dados_da_categoria["descricao"]);
        $stmt->execute();
    }

    /**
     * Atualiza um registro na tabela categoria
     */
    public function update($dados_da_categoria)
    {
        $sql = "UPDATE categoria SET descricao = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $dados_da_categoria["descricao"]);
        $stmt->bindParam(2, $dados_da_categoria["id"]);
        $stmt->execute();
    }

    /**
     * Deleta um registro da tabela categoria
     */
    public function delete($id)
    {
        $sql = "DELETE FROM categoria WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

}