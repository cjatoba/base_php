<?php

namespace App\DAO;

class UsuarioDAO extends DAO
{
    /**
     * Cria novo objeto para CRUD de usuários
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getMyUserById($id)
    {
        $stmt = $this->conexao->prepare("SELECT id, nome, usuario, email FROM usuarios WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    /**
     * Atualiza um registro na tabela usuarios
     */
    public function update($dados_usuario)
    {
        $sql = "UPDATE usuarios SET nome = ?, email = ?, senha = sha1(?) WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(1, $dados_usuario["nome"]);
        $stmt->bindParam(2, $dados_usuario["email"]);
        $stmt->bindParam(3, $dados_usuario["senha"]);
        $stmt->bindParam(4, $dados_usuario["id"]);
        $stmt->execute();
    }
}