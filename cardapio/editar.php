<?php 
if(isset($_GET['id'])) {
    require_once "../conexao.php";
    require_once "funçoes.php";
    $id = $_GET['id'];
    $prato = obterPrato($con, $id);
    if(!$prato) {
        echo "Prato não encontrado.";
        exit;
    }
    
}else {
    echo "ID do prato não fornecido.";
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    if(atualizarPrato($con, $id, $nome, $preco, $descricao, $categoria)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar prato.";
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
    <h1>Editar Prato</h1>
    <form action="" method="post">
        <input type="text" name="nome" value="<?php echo $prato->nome; ?>" placeholder="Nome do prato" required>
        <input type="text" name="descricao" value="<?php echo $prato->descricao; ?>" placeholder="Descrição do prato" required>
        <input type="text" name="categoria" value="<?php echo $prato->categoria; ?>" placeholder="Categoria do prato" required>
        <input type="number" step="0.01" name="preco" value="<?php echo $prato->preco; ?>" placeholder="Preço do prato" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>