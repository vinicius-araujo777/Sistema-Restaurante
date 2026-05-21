<?php
require_once "../conexao.php";

function listarMesas($conn) {
    $stmt = $conn->prepare("SELECT * FROM mesas");
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function adicionarMesa($conn, $numero, $capacidade) {
    $stmt = $conn->prepare("INSERT INTO mesas (numero, capacidade, status) VALUES (:numero, :capacidade, 'Disponível')");
    $stmt->bindValue(":numero", $numero);
    $stmt->bindValue(":capacidade", $capacidade);
    return $stmt->execute();
}

function obterMesa($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM mesas WHERE id = :id");
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function excluirMesa($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM mesas WHERE id = :id");
    $stmt->bindValue(":id", $id);
    return $stmt->execute();
}

function atualizarMesa($conn, $id, $numero, $capacidade) {
    $stmt = $conn->prepare("UPDATE mesas SET numero = :numero, capacidade = :capacidade WHERE id = :id");
    $stmt->bindValue(":numero", $numero);
    $stmt->bindValue(":capacidade", $capacidade);
    $stmt->bindValue(":id", $id);
    return $stmt->execute();
}

function atualizarStatus($conn, $id, $status) {
    $stmt = $conn->prepare("UPDATE mesas SET status = :status WHERE id = :id");
    $stmt->bindValue(":status", $status);
    $stmt->bindValue(":id", $id);
    return $stmt->execute();
}

?>