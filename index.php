<?php require_once "protege.php"; ?>
<?php
require_once "conexao.php";
require_once "cardapio/funcoes.php";
require_once "mesas/funcoes.php";
require_once "funcionarios/funcoes.php";

$totalPratos = count(listarPratos($con));
$totalFuncionarios = count(listarFuncionarios($con));
$totalMesas = count(listarMesas($con));
$mesasDisponiveis = 0;
foreach (listarMesas($con) as $mesa) {
    if ($mesa->status === "Disponível") {
        $mesasDisponiveis++;
    }
}

$stmt = $con->query("SELECT * FROM cardapio ORDER BY preco DESC LIMIT 5");
$pratosCaros = $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<?php include 'sidebar.php'; ?>

<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Bem vindo(a), <?= $_SESSION['usuario'] ?>!</h1>
    <p class="text-sm text-gray-500">Visão geral do seu restaurante</p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-xl border border-gray-200 p-5">
        <p class="text-sm text-gray-500">Total de mesas</p>
        <p class="text-3xl font-bold text-gray-900 mt-1"><?php echo $totalMesas; ?></p>
        <a href="/Sistema-Restaurante/mesas/index.php" class="text-xs text-orange-500 hover:underline mt-1 inline-block">Ver mesas →</a>
    </div>
    <div class="bg-white rounded-xl border border-gray-200 p-5">
        <p class="text-sm text-gray-500">Total de mesas disponiveis</p>
        <p class="text-3xl font-bold text-gray-900 mt-1"><?php echo $mesasDisponiveis; ?></p>
        <a href="/Sistema-Restaurante/mesas/index.php" class="text-xs text-orange-500 hover:underline mt-1 inline-block">Status mesa →</a>
    </div>
    <div class="bg-white rounded-xl border border-gray-200 p-5">
        <p class="text-sm text-gray-500">Funcionários Ativos</p>
        <p class="text-3xl font-bold text-gray-900 mt-1"><?php echo $totalFuncionarios; ?></p>
        <a href="/Sistema-Restaurante/funcionarios/index.php" class="text-xs text-orange-500 hover:underline mt-1 inline-block">Ver funcionários →</a>
    </div>
    <div class="bg-white rounded-xl border border-gray-200 p-5">
        <p class="text-sm text-gray-500">Pratos Cadastrados</p>
        <p class="text-3xl font-bold text-gray-900 mt-1"><?php echo $totalPratos; ?></p>
        <a href="/Sistema-Restaurante/cardapio/index.php" class="text-xs text-orange-500 hover:underline mt-1 inline-block">Ver pratos →</a>
    </div>
</div>

<div class="bg-white rounded-xl border border-gray-200 p-6">
    <h2 class="text-base font-semibold text-gray-900 mb-4">Pratos mais caros</h2>
    <table class="w-full text-sm">
        <thead>
            <tr class="text-left text-gray-400 border-b border-gray-100">
                <th class="pb-2 font-medium">#</th>
                <th class="pb-2 font-medium">Prato</th>
                <th class="pb-2 font-medium text-right">Preço</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <?php foreach($pratosCaros as $i){ ?>
                <tr>
                    <td class="py-3 text-gray-400 font-medium"> <?= $i->id ?> </td>
                    <td class="py-3 text-gray-800"> <?= $i->nome ?>  </td>
                    <td class="py-3 text-right text-gray-600"> R$ <?= number_format($i->preco, 2, ',', '.') ?>  </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</main>
</body>
</html>