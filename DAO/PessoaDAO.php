<?php

class PessoaDAO
{
    private $conexao;


    /**
     * Função que é executada na hora da instância do objeto
     */
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=db_revisao';
        $user = 'root';
        $pass = 'Eduardo@mysql';

        $this->conexao = new PDO($dsn, $user, $pass);
    }

    public function insert(PessoaModel $model)
    {
        $sql  = "INSERT INTO pessoa(nome, cpf, data_nascimento) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        $stmt->execute();
    }

    public function select()
    {
        $sql = 'SELECT * FROM pessoa';

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM pessoa WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }


    public function getById($id)
    {
        $sql = 'SELECT * FROM pessoa WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject();
    }

    public function update(PessoaModel $model)
    {
        $sql = 'UPDATE pessoa SET nome = ?, cpf = ?, data_nascimento = ? WHERE id = ?';

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->id);

        $stmt->execute();
    }
}
// Instância de objeto
$dao = new PessoaDAO();

// $dao->conexao = new PDO();