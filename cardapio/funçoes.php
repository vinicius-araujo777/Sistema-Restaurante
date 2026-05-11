<?php 

require_once "../conexao.php";

function listarPratos($con) {
    $stmt = $con->query("SELECT * FROM cardapio");
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function adicionarPrato($con, $nome, $preco, $descricao, $categoria) {
    $stmt = $con->prepare("INSERT INTO cardapio (nome,descricao, categoria, preco) VALUES (:nome, :descricao, :categoria, :preco)");
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':categoria', $categoria);
    $stmt->bindValue(':preco', $preco);
    return $stmt->execute();
}

function excluirPrato($con, $id) {
    $stmt = $con->prepare("DELETE FROM cardapio WHERE id = :id");
    $stmt->bindValue(':id', $id);
    return $stmt->execute();
}

function atualizarPrato($con, $id, $nome, $preco, $descricao, $categoria) {
    $stmt = $con->prepare("UPDATE cardapio SET nome = :nome, descricao = :descricao, categoria = :categoria, preco = :preco WHERE id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':descricao', $descricao);
    $stmt->bindValue(':categoria', $categoria);
    $stmt->bindValue(':preco', $preco);
    return $stmt->execute();
}
?>