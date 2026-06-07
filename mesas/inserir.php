<?php require_once "../protege.php"; ?>
<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require_once "../conexao.php";
    require_once "funcoes.php";
    $numero = $_POST['numero'];
    $capacidade = $_POST['capacidade'];

    if(adicionarMesa($con,$numero,$capacidade)){
        header("location:index.php");
        exit;
    } else{
        echo "Erro ao adicionar mesa";
    }
}
?>

<?php $title = "Adicionar mesa" ?>
<?php include '../sidebar.php'; ?>

<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Adicionar mesas</h1>
    <p class="text-sm text-gray-500"> Preencha os dados da nova mesa</p>
</div>

<div class="bg-white rounded-xl border border-gray-200 p-6 max-w-lg">
    <form action="" method="post" class="space-y-4">
        <div>
            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Número da mesa</label>
            <input type="text" name="numero" required
            class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
        </div>

        <div>
            <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Capacidade da mesa</label>
            <input type="text" name="capacidade" required
            class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
        </div>

        <div class="flex gap-3 pt-2">
            <button type="submit"
            class="bg-orange-500 hover:bg-orange-600 text-white font-medium text-sm px-6 py-2.5 rounded-lg transition">
                Adicionar
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