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
        <div class="mb-6 px-2 pt-2">
            <img src="/Sistema-Restaurante/assets/LogoRest2.png" alt="Logo Hambre" class="w-20 h-20 object-contain rounded-xl mb-1">
        </div>

        <nav class="flex flex-col gap-1 ">
            <a href="/Sistema-Restaurante/index.php" class="text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-sm transition">Início</a>
            <a href="/Sistema-Restaurante/cardapio/index.php" class="text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-sm transition">Cardápio</a>
            <a href="/Sistema-Restaurante/funcionarios/index.php" class="text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-sm transition">Funcionários</a>
            <a href="/Sistema-Restaurante/mesas/index.php" class="text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-sm transition">Mesas</a>
            <div class="mt-96 pt-4 border-t border-white/20">
                <a href="/Sistema-Restaurante/login/logout.php"
                    class="flex items-center gap-2 text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-sm transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Sair
                </a>
            </div>
        </nav>
    </aside>

    <!-- Conteúdo -->
    <main class="ml-56 flex-1 p-8">