<?php include '../sidebar.php'; ?>

<h1 class="text-2xl font-bold text-gray-900 mb-6">Funcionários</h1>

<div>
    <div>
        <h2></h2>
        <a href="inserir.php">Adicionar funcionarios</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "funcoes.php";
            $funcionarios = listarFuncionarios($con);
            foreach($funcionarios as $f):?>
            <tr>
                <td><?php echo $f->id ?></td>
                <td><?php echo $f->nome ?></td>
                <td><?php echo $f->cargo ?></td>
                <td><?php echo $f->salario ?></td>
                <td>
                    <div>
                        <a href="editar.php?id=<?=  $f->id ?> "> Editar </a>
                        <a href="excluir.php?id=<?= $f->id ?> "> Excluir </a>
                    </div>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>

</main>
</body>
</html>