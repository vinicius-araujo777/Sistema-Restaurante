<?php
require_once "../conexao.php";
require_once "funçoes.php";
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    if(adicionarPrato($con, $nome, $preco, $descricao, $categoria)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao adicionar prato.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome do prato" required>
        <input type="text" name="descricao" placeholder="Descrição do prato" required>
        <input type="text" name="categoria" placeholder="Categoria do prato" required>
        <input type="number" step="0.01" name="preco" placeholder="Preço do prato" required>
        <button type="submit">Adicionar</button>
    </form>
</body>
</html>