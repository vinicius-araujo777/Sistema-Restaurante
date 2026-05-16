<?php 
require_once "../conexao.php";
require_once "funcoes.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    if(adicionarFuncionario($con,$nome,$cargo,$salario)){
        header("location:index.php");
        exit;
    } else{
        echo "Erro ao adicionar funcionario";
    }
};

?>

<?php $title = "Adicionar funcionario" ?>
<?php include '../sidebar.php'; ?>

<div>
    <h1></h1>
    <p></p>
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
            <button type="submit">Adicionar</button>
            <a href="index.php">Cancelar</a>
        </div>
    </form>
</div>
