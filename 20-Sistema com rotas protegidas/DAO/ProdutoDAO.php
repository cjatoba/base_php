<?php 

class ProdutoDAO extends DAO
{

    /**
     * Criar um novo objeto para o CRUD de produto
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Retorna um registro específico da tabela produto
     */
    public function getById($id)
    {
        $stmt = $this->conexao->prepare("SELECT * FROM produto WHERE id = ?");

        $stmt->bindParam(1,$id);

        $stmt->execute();

        return $stmt->fetchObject();
    }

    /**
     * Retorna todos os dados da tabela produto
     */
    public function getAllRows()
    {
        $stmt = $this->conexao->prepare("SELECT * FROM produto");
        $stmt->execute();

        $arr_produtos = array();

        while($c = $stmt->fetchObject()){
            $arr_produtos[] = $c;
        }

        return $arr_produtos;
    }

    /**
     * Método para inserir um novo registro natabela produto
     */
    public function insert($dados_do_produto)
    {
        $sql = 
            "INSERT INTO produto (
                id_marca, 
                id_categoria, 
                descricao, 
                preco
            ) VALUES (?, ?, ?, ?)
        ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $dados_do_produto["id_marca"]);
        $stmt->bindParam(2, $dados_do_produto["id_categoria"]);
        $stmt->bindParam(3, $dados_do_produto["descricao"]);
        $stmt->bindParam(4, $dados_do_produto["preco"]);
        $stmt->execute();
    }

    /**
     * Atualiza um registro na tabela produto
     */
    public function update($dados_da_produto)
    {
        $sql = 
            "UPDATE produto 
            SET 
                id_marca = ?, 
                id_categoria = ?, 
                descricao = ?, 
                preco = ? 
            WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $dados_da_produto["id_marca"]);
        $stmt->bindParam(2, $dados_da_produto["id_categoria"]);
        $stmt->bindParam(3, $dados_da_produto["descricao"]);
        $stmt->bindParam(4, $dados_da_produto["preco"]);
        $stmt->bindParam(5, $dados_da_produto["id"]);
        $stmt->execute();
    }

    /**
     * Deleta um registro da tabela produto
     */
    public function delete($id)
    {
        $sql = "DELETE FROM produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
    }

}