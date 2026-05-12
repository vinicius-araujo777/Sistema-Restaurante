<?php 


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cardápio</h1>
    <a href="../index.php">Voltar</a>
    <a href="inserir.php">Adicionar Prato</a>

    <table>
        <thead>
            <th>id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Preço</th>
        </thead>
        <tbody>
            <?php 
            require_once "funçoes.php";
            $pratos = listarPratos($con);
            foreach($pratos as $prato) { ?>
                <tr>
                    <td><?php echo $prato->id; ?></td>
                    <td><?php echo $prato->nome; ?></td>
                    <td><?php echo $prato->descricao; ?></td>
                    <td><?php echo $prato->categoria; ?></td>
                    <td><?php echo $prato->preco; ?></td>
                    <td>
                        <a href="excluir.php?id=<?php echo $prato->id; ?>">Deletar</a>
                        <a href="editar.php?id=<?php echo $prato->id; ?>">Editar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>