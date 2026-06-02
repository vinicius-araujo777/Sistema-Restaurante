<?php
if (isset($_GET['id'])) {
    require_once "../conexao.php";
    require_once "funcoes.php";
    $id = $_GET['id'];
    $prato = obterPrato($con, $id);
    if (!$prato) {
        echo "Prato não encontrado.";
        exit;
    }
} else {
    echo "ID do prato não fornecido.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    if (atualizarPrato($con, $id, $nome, $preco, $descricao, $categoria)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar prato.";
    }
}
?>

<?php $title = "Editar Prato" ?>
<?php include '../sidebar.php'; ?>

<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Editar Prato</h1>
    <p class="text-sm text-gray-500">Atualize os dados do prato</p>
</div>

<?php if (!empty($erro)): ?>
    <div class="bg-red-50 border border-red-200 text-red-500 text-sm px-4 py-3 rounded-lg mb-5"><?= $erro ?></div>
<?php endif; ?>

<div class="bg-white rounded-xl border border-gray-200 p-6 max-w-lg">
    <form action="" method="post" class="space-y-4">

        <div>
            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Nome do Prato</label>
            <input type="text" name="nome" value="<?= htmlspecialchars($prato->nome) ?>" required
            class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
        </div>

        <div>
            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Descrição</label>
            <input type="text" name="descricao" value="<?= htmlspecialchars($prato->descricao) ?>" required
            class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Categoria</label>
                <select name="categoria" required
                    class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
                    <option value="">Selecione uma categoria</option>
                    <option value="Prato Principal" <?= $prato->categoria == 'Prato Principal' ? 'selected' : '' ?>>Prato Principal</option>
                    <option value="Acompanhamento" <?= $prato->categoria == 'Acompanhamento' ? 'selected' : '' ?>>Acompanhamento</option>
                    <option value="Salada" <?= $prato->categoria == 'Salada' ? 'selected' : '' ?>>Salada</option>
                    <option value="Sobremesa" <?= $prato->categoria == 'Sobremesa' ? 'selected' : '' ?>>Sobremesa</option>
                    <option value="Bebida" <?= $prato->categoria == 'Bebida' ? 'selected' : '' ?>>Bebida</option>
                </select>
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Preço (R$)</label>
                <input type="number" step="0.01" name="preco" value="<?= $prato->preco ?>" required
                class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
            </div>
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