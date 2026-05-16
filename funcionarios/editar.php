<?php 
if(isset($_GET['id'])){
    require_once "../conexao.php";
    require_once "funcoes.php";
    $id = $_GET['id'];
    $funcionario = obterFuncionario($con,$id);
    if(!$funcionario){
        echo "Funcionario não encontrado.";
        exit();
    }
}else{
    echo "Id não fornecido.";
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    if(atualizarFuncionario($con,$id,$nome,$cargo,$salario)){
        header("location:index.php");
        exit();
    }else{
        echo "Erro ao atualizar funcionario.";
        exit();
    }
}
?>

<?php $title = "Editar Funcionario" ?>
<?php include '../sidebar.php'; ?>

<div>
    <h1>Atualizar funcionario</h1>
    <p>Atualize os dados dos funcionarios</p>
</div>

<div>
    <form action="" method="post">
        <div>
            <label>Nome do funcionario</label>
            <input type="text" name="nome" required>
        </div>

        <div>
            <label>Cargo do funcionario</label>
            <input type="text" name="cargo" required>
        </div>

        <div>
            <label>Salario do funcionario</label>
            <input type="number" name="salario" step="0.01" required>
        </div>

        <div>
            <button type="submit">Salvar</button>
            <a href="index.php">Cancelar</a>
        </div>
    </form>
</div>

</main>
</body>
</html>