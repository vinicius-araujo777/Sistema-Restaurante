<?php include 'sidebar.php'; ?>

<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
    <p class="text-sm text-gray-500">Visão geral do seu restaurante</p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-8">
    <div class="bg-white rounded-xl border border-gray-200 p-5">
        <p class="text-sm text-gray-500">Total de Pedidos</p>
        <p class="text-3xl font-bold text-gray-900 mt-1">397</p>
        <p class="text-xs text-emerald-500 mt-1">+12% do mês anterior</p>
    </div>
    <div class="bg-white rounded-xl border border-gray-200 p-5">
        <p class="text-sm text-gray-500">Faturamento</p>
        <p class="text-3xl font-bold text-gray-900 mt-1">R$ 38.500</p>
        <p class="text-xs text-emerald-500 mt-1">+8% do mês anterior</p>
    </div>
    <div class="bg-white rounded-xl border border-gray-200 p-5">
        <p class="text-sm text-gray-500">Funcionários Ativos</p>
        <p class="text-3xl font-bold text-gray-900 mt-1">24</p>
        <p class="text-xs text-gray-400 mt-1">2 novos este mês</p>
    </div>
    <div class="bg-white rounded-xl border border-gray-200 p-5">
        <p class="text-sm text-gray-500">Pratos Cadastrados</p>
        <p class="text-3xl font-bold text-gray-900 mt-1">58</p>
        <p class="text-xs text-gray-400 mt-1">5 novos este mês</p>
    </div>
</div>

<div class="bg-white rounded-xl border border-gray-200 p-6">
    <h2 class="text-base font-semibold text-gray-900 mb-4">Pratos Mais Vendidos</h2>
    <table class="w-full text-sm">
        <thead>
            <tr class="text-left text-gray-400 border-b border-gray-100">
                <th class="pb-2 font-medium">#</th>
                <th class="pb-2 font-medium">Prato</th>
                <th class="pb-2 font-medium text-right">Pedidos</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <tr>
                <td class="py-3 text-emerald-500 font-bold">1</td>
                <td class="py-3 text-gray-800">Picanha na Brasa</td>
                <td class="py-3 text-right text-gray-600">142</td>
            </tr>
            <tr>
                <td class="py-3 text-gray-400 font-medium">2</td>
                <td class="py-3 text-gray-800">Feijoada Completa</td>
                <td class="py-3 text-right text-gray-600">118</td>
            </tr>
            <tr>
                <td class="py-3 text-gray-400 font-medium">3</td>
                <td class="py-3 text-gray-800">Salada Caesar</td>
                <td class="py-3 text-right text-gray-600">97</td>
            </tr>
            <tr>
                <td class="py-3 text-gray-400 font-medium">4</td>
                <td class="py-3 text-gray-800">Frango Grelhado</td>
                <td class="py-3 text-right text-gray-600">74</td>
            </tr>
            <tr>
                <td class="py-3 text-gray-400 font-medium">5</td>
                <td class="py-3 text-gray-800">Sopa do Dia</td>
                <td class="py-3 text-right text-gray-600">51</td>
            </tr>
        </tbody>
    </table>
</div>

</main>
</body>
</html>