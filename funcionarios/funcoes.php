<?php 
require_once __DIR__ . "/../conexao.php";

function listarFuncionarios($con) {
    $stmt = $con->prepare("SELECT * FROM funcionarios");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function adicionarFuncionario($con,$nome, $cargo, $salario){
    $stmt = $con->prepare("INSERT INTO funcionarios (nome, cargo, salario) VALUES (:nome, :cargo, :salario)");
    $stmt->bindValue(":nome",$nome);
    $stmt->bindValue(":cargo",$cargo);
    $stmt->bindValue(":salario",$salario);
    return $stmt->execute();
}

function obterFuncionario($con,$id){
    $stmt = $con->prepare("SELECT * FROM funcionarios WHERE id = :id");
    $stmt->bindValue(":id",$id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function excluirFuncionario($con,$id){
    $stmt = $con->prepare("DELETE FROM funcionarios WHERE id = :id");
    $stmt->bindValue(":id",$id);
    return $stmt->execute();
}

function atualizarFuncionario($con,$id,$nome, $cargo, $salario){
    $stmt = $con->prepare("UPDATE funcionarios SET nome = :nome, cargo = :cargo, salario = :salario WHERE id = :id");
    $stmt->bindValue(":nome",$nome);
    $stmt->bindValue(":cargo",$cargo);
    $stmt->bindValue(":salario",$salario);
    $stmt->bindValue(":id",$id);
    return $stmt->execute();
}
?>