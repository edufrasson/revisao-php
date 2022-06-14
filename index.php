<?php
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PessoaController.php';
switch($path){
    /* ROTAS PARA PESSOA */
    case '/pessoa':
        /*Rota para listar os registros de pessoa*/
        PessoaController::index();
    break;   
    
    case '/pessoa/form':
        /*Rota para acessar o formulário de pessoa*/
        PessoaController::form();
    break;  

    case '/pessoa/save':
        /*Rota para salvar os registros de pessoa*/
        PessoaController::save();
    break;  

    case '/pessoa/delete':
        /*Rota para deletar os registros de pessoa*/
        PessoaController::delete();
    break;  

    default:
        header("Location: /pessoa");
    break;
}    