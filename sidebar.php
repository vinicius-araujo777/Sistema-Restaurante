<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?? 'Hambre' ?></title>
</head>
<body class="flex bg-gray-50 min-h-screen">

<!-- Sidebar -->
<aside class="w-52 bg-orange-500 min-h-screen fixed top-0 left-0 flex flex-col p-4">
    <div class="mb-8 px-2 pt-2">
        <span class="text-2xl">🍽</span>
        <h1 class="text-white font-bold text-lg mt-1">Hambre</h1>
    </div>

    <nav class="flex flex-col gap-1">
        <a href="/Sistema-Restaurante/index.php" class="text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-sm transition">Início</a>
        <a href="/Sistema-Restaurante/cardapio/index.php" class="text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-sm transition">Cardápio</a>
        <a href="/Sistema-Restaurante/funcionarios/index.php" class="text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-sm transition">Funcionários</a>
        <a href="/Sistema-Restaurante/mesas/index.php" class="text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-sm transition">Mesas</a>
    </nav>
</aside>

<!-- Conteúdo -->
<main class="ml-56 flex-1 p-8">