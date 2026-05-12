<?php 
if (isset($_GET['id'])) {
    require_once "../conexao.php";
    require_once "funçoes.php";
    $id = $_GET['id'];
    if(excluirPrato($con, $id)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao excluir prato.";
    }
} else {
    echo "ID do prato não fornecido.";
}
