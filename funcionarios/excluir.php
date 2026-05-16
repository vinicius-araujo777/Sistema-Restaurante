<?php 
if(isset($_GET['id'])){
    require_once "../conexao.php";
    require_once "funcoes.php";
    $id = $_GET['id'];
    if(excluirFuncionario($con, $id)){
        header("location:index.php");
        exit();
    } else{
        echo "Erro ao excluir prato.";
    }
}else{
    echo "ID do prato não fornecido.";
}