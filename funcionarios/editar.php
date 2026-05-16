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

<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Atualizar funcionario</h1>
    <p class="text-sm text-gray-500">Atualize os dados dos funcionarios</p>
</div>

<div class="bg-white rounded-xl border border-gray-200 p-6 max-w-lg">
    <form action="" method="post" class="space-y-4">

        <div>
            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Nome do funcionario</label>
            <input type="text" name="nome" value="<?= htmlspecialchars($funcionario->nome) ?>" required
            class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
        </div>

        <div>
            <label  class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Cargo do funcionario</label>
            <input type="text" name="cargo" value="<?= htmlspecialchars($funcionario->cargo) ?>" required
            class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
        </div>

        <div>
            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Salario do funcionario</label>
            <input type="number" name="salario" step="0.01" value="<?= htmlspecialchars($funcionario->salario) ?>" required
            class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit"
            class="bg-orange-500 hover:bg-orange-600 text-white font-medium text-sm px-6 py-2.5 rounded-lg transition">
                Salvar
            </button>

            <a href="index.php"
            class="border border-gray-200 text-gray-500 hover:bg-gray-50 font-medium text-sm px-6 py-2.5 rounded-lg transition">
                Cancelar
            </a>
        </div>
    </form>
</div>

</main>
</body>
</html>