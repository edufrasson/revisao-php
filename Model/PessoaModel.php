<?php

class PessoaModel{
    // Atributos: caracteristicas da nossa classe Pessoa
    public $id, $nome, $data_nascimento, $cpf;
    public $rows;
    // Métodos

    /**
     * Salva os registros (CREATE)
     */
    public function save(){
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();
        
        if(empty($this->id))
            $dao->insert($this);
        else
            $dao->update($this);  
    }    

     /**
     * Retorna todos os registros (READ)
     */
    public function getAllRows(){
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();
        
        $this->rows = $dao->select();
    }

    /**
     * Retorna um registro específico (READ 2)
     */
    public function getById($id){
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();
        
        return $dao->getById($id);        
    }

    /**
     * Deleta um registro específico (DELETE)
     */
    public function delete($id){
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();
        
        $dao->delete($id);
    }

}