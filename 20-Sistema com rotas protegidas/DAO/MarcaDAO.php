<?php 

class MarcaDAO extends DAO
{

    /**
     * Criar um novo objeto para o CRUD de marcas
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retorna um registro específico da tabela marca
     */
    public function getById($id)
    {
        $stmt = $this->conexao->prepare("SELECT * FROM marca WHERE id = ?");

        $stmt->bindParam(1,$id);

        $stmt->execute();

        return $stmt->fetchObject();
    }

    /**
     * Retorna todos os dados da tabela marca
     */
    public function getAllRows()
    {
        $stmt = $this->conexao->prepare("SELECT * FROM marca");
        $stmt->execute();

        $arr_marcas = array();

        while($c = $stmt->fetchObject()){
            $arr_marcas[] = $c;
        }

        return $arr_marcas;
    }

    /**
     * Método para inserir um novo registro natabela marca
     */
    public function insert($dados_da_marca)
    {
        $sql = "INSERT INTO marca (descricao) VALUES (?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $dados_da_marca["descricao"]);
        $stmt->execute();
    }

    /**
     * Atualiza um registro na tabela marca
     */
    public function update($dados_da_marca)
    {
        $sql = "UPDATE marca SET descricao = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $dados_da_marca["descricao"]);
        $stmt->bindParam(2, $dados_da_marca["id"]);
        $stmt->execute();
    }

    /**
     * Deleta um registro da tabela marca
     */
    public function delete($id)
    {
        $sql = "DELETE FROM marca WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

}