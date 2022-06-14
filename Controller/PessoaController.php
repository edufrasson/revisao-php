<?php

class PessoaController{
    

    // Métodos

    /**
     * Retorna todos os registros da tabela Pessoa (READ)
     * */      
    public static function index(){
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();  

        $model->getAllRows();

        include 'View/modules/Pessoa/ListarPessoa.php';
    }

     /**
     * Acessa o formulário da tabela Pessoa
     * */   
    public static function form(){  
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();  

        if(isset($_GET['id'])){
            $model = $model->getById($_GET['id']);
        }

        include 'View/modules/Pessoa/FormPessoa.php';
    }

     /**
     * Salva os registros da tabela Pessoa (CREATE)
     * */  
    public static function save(){
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();  

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->save();

        header("Location: /pessoa");
    }
    /**
     * Deleta os registors da tabela Pessoa (DELETE)
     * */  
    public static function delete(){
        include 'Model/PessoaModel.php';
        $model = new PessoaModel();  

        $model->delete($_GET['id']);

        header("Location: /pessoa");
    }
}