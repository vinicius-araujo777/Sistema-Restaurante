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
        <div class="pt-2 flex flex-col items-center">
            <img src="/Sistema-Restaurante/assets/LogoRest2.png" alt="Logo Hambre" class="w-20 h-20 object-contain rounded-xl mb-1">
        </div>

        <nav class="flex flex-col gap-1 mt-6">
            <a href="/Sistema-Restaurante/index.php"
                class="flex items-center gap-2 text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-base transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Início
            </a>
            <a href="/Sistema-Restaurante/cardapio/index.php"
                class="flex items-center gap-2 text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-base transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                Cardápio
            </a>
            <a href="/Sistema-Restaurante/funcionarios/index.php"
                class="flex items-center gap-2 text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-base transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Funcionários
            </a>
            <a href="/Sistema-Restaurante/mesas/index.php"
                class="flex items-center gap-2 text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-base transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18M10 4v16M14 4v16" />
                </svg>
                Mesas
            </a>
            <div class="mt-96 border-t border-white/20">
                <a href="/Sistema-Restaurante/login/logout.php"
                    class="flex items-center gap-2 text-white/80 hover:text-white hover:bg-white/20 px-3 py-2 rounded-lg text-base transition">
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