<?php require_once "../protege.php"; ?>
<?php $title = "Mesas"; ?>
<?php require_once "../sidebar.php" ?>

<h1 class="text-2xl font-bold text-gray-900 mb-6">Mesas</h1>

<div class="bg-white rounded-xl border border-gray-200 p-6">
    <div class="flex justify-between items-center mb-5">
        <h2 class="text-base font-semibold text-gray-900">Lista de Mesas</h2>
        <a href="inserir.php" class="bg-orange-500 hover:bg-orange-600 text-white text-sm px-4 py-2 rounded-lg transition">+ Adicionar Mesa</a>
    </div>

    <table class="w-full text-sm">
        <thead>
            <tr class="text-left text-gray-400 border-b border-gray-100">
                <th class="pb-2 px-2 font-medium">#</th>
                <th class="pb-2 px-1 font-medium">Número</th>
                <th class="pb-2 px-1 font-medium">Capacidade</th>
                <th class="pb-2 px-4 font-medium">Status</th>
                <th class="pb-2 px-4 font-medium">Opções</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <?php
            require_once "funcoes.php";
            $mesas = listarMesas($con);
            foreach($mesas as $m): ?>
            <tr class="hover:bg-gray-50 transition">
                <td class="py-3 px-2 text-gray-400 "><?= $m->id ?></td>
                <td class="py-3 px-2 text-gray-800 font-medium">Mesa <?= $m->numero ?></td>
                <td class="py-3 px-2 text-gray-600"><?= $m->capacidade ?> pessoas</td>
                <td class="py-3 px-2">
                    <?php if($m->status === 'Disponível'): ?>
                        <span class="bg-green-50 text-green-600 text-xs px-2 py-1 rounded-full">Disponível</span>
                    <?php elseif($m->status === 'Ocupada'): ?>
                        <span class="bg-red-50 text-red-500 text-xs px-2 py-1 rounded-full">Ocupada</span>
                    <?php else: ?>
                        <span class="bg-yellow-50 text-yellow-600 text-xs px-2 py-1 rounded-full">Reservada</span>
                    <?php endif; ?>
                </td>
                <td class="py-3 px-2">
                    <div class="flex gap-1">
                        <a href="editar.php?id=<?= $m->id ?>" class="text-orange-500 hover:bg-orange-50 p-1.5 rounded-lg transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </a>
                        
                        <a href="excluir.php?id=<?= $m->id ?>" onclick="return confirm('Excluir esta mesa?')" class="text-red-400 hover:bg-red-50 p-1.5 rounded-lg transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</main>
</body>
</html>