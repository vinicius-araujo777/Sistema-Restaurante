<?php
require_once "../conexao.php";

function listarMesas($con) {
    $stmt = $con->prepare("SELECT * FROM mesas");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function adicionarMesa($con, $numero, $capacidade) {
    $stmt = $con->prepare("INSERT INTO mesas (numero, capacidade, status) VALUES (:numero, :capacidade, 'Disponível')");
    $stmt->bindValue(":numero", $numero);
    $stmt->bindValue(":capacidade", $capacidade);
    return $stmt->execute();
}

function obterMesa($con, $id) {
    $stmt = $con->prepare("SELECT * FROM mesas WHERE id = :id");
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function excluirMesa($con, $id) {
    $stmt = $con->prepare("DELETE FROM mesas WHERE id = :id");
    $stmt->bindValue(":id", $id);
    return $stmt->execute();
}

function atualizarMesa($con, $id, $numero, $capacidade) {
    $stmt = $con->prepare("UPDATE mesas SET numero = :numero, capacidade = :capacidade WHERE id = :id");
    $stmt->bindValue(":numero", $numero);
    $stmt->bindValue(":capacidade", $capacidade);
    $stmt->bindValue(":id", $id);
    return $stmt->execute();
}

function atualizarStatus($con, $id, $status) {
    $stmt = $con->prepare("UPDATE mesas SET status = :status WHERE id = :id");
    $stmt->bindValue(":status", $status);
    $stmt->bindValue(":id", $id);
    return $stmt->execute();
}

?>