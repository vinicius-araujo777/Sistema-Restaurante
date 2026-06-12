<?php require_once "../protege.php"; ?>
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

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    if(atualizarFuncionario($con,$id,$nome,$cargo,$salario)){
        $sucesso = "Funcionário atualizado com sucesso!";
    } else{
        $erro = "Erro ao atualizar funcionario.";
    }
}
?>

<?php $title = "Editar Funcionario" ?>
<?php include '../sidebar.php'; ?>

<div class="mb-10 text-center">
    <h1 class="text-3xl font-bold text-gray-900">Atualizar funcionário</h1>
    <p class="text-base text-gray-500">Atualize os dados dos funcionários</p>
</div>

<div class="flex justify-center">
    <div class="bg-white rounded-xl border border-gray-200 p-8 max-w-3xl w-full shadow-sm">

        <?php if (!empty($erro)): ?>
            <div class="bg-red-50 border border-red-200 text-red-500 text-sm px-4 py-3 rounded-lg mb-5"><?= $erro ?></div>
        <?php endif; ?>
                
        <?php if(!empty($sucesso)): ?>
            <div class="bg-green-50 border border-green-200 text-green-600 text-sm px-4 py-3 rounded-lg mb-5"><?= $sucesso ?></div>
        <?php endif; ?>

        <form action="" method="post" class="space-y-6">
            <div>
                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Nome do funcionário</label>
                <input type="text" name="nome" value="<?= htmlspecialchars($funcionario->nome) ?>" required
                class="w-full border border-gray-200 rounded-lg px-3 py-3 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
            </div>

            <div>
                <label  class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Cargo do funcionário</label>
                <select name="cargo" required
                    class="w-full border border-gray-200 rounded-lg px-3 py-3 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
                    <option value="">Selecione um cargo</option>
                    <option value="Garçom" <?= $funcionario->cargo == 'Garçom' ? 'selected' : '' ?> >Garçom</option>
                    <option value="Chef" <?= $funcionario->cargo == 'Chef' ? 'selected' : '' ?> >Chef</option>
                    <option value="Cozinheiro" <?= $funcionario->cargo == 'Cozinheiro' ? 'selected' : '' ?> >Cozinheiro</option>
                    <option value="Atendente" <?= $funcionario->cargo == 'Atendente' ? 'selected' : '' ?> >Atendente</option>
                    <option value="Gerente" <?= $funcionario->cargo == 'Gerente' ? 'selected' : '' ?> >Gerente</option>
                    <option value="Caixa" <?= $funcionario->cargo == 'Caixa' ? 'selected' : '' ?> >Caixa</option>
                    <option value="Auxiliar de Cozinha" <?= $funcionario->cargo == 'Auxiliar de Cozinha' ? 'selected' : '' ?> >Auxiliar de Cozinha</option>
                    <option value="Barman" <?= $funcionario->cargo == 'Barman' ? 'selected' : '' ?> >Barman</option>
                    <option value="Limpeza" <?= $funcionario->cargo == 'Limpeza' ? 'selected' : '' ?> >Limpeza</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Salário do funcionário</label>
                <input type="number" name="salario" step="0.01" value="<?= htmlspecialchars($funcionario->salario) ?>" required
                class="w-full border border-gray-200 rounded-lg px-3 py-3 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
            </div>

            <div class="flex justify-end gap-3 pt-4">
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
</div>

</main>
</body>
</html>