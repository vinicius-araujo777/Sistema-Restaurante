<?php
session_start();
require_once "../conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $senha   = $_POST['senha'];

    $stmt = $con->prepare("SELECT * FROM registros WHERE nome = :nome");
    $stmt->bindValue(":nome", $nome);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if ($user && password_verify($senha, $user->senha)) {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $user->nome;
        header("Location: ../index.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Hambre</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-sm">
        <div class="text-center mb-8">
            <img src="/assets/LogoRest.png" alt="Logo Hambre" class="w-24 h-24 object-contain rounded-xl mb-1 mx-auto">
            <p class="text-base text-gray-500 mt-1 mx-auto">Sistema de Gestão</p>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-8">

            <?php if (!empty($erro)): ?>
                <div class="bg-red-50 border border-red-200 text-red-500 text-sm px-4 py-3 rounded-lg mb-5"><?= $erro ?></div>
            <?php endif; ?>

            <form action="" method="post" class="space-y-4">
                <div>
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Nome</label>
                    <input type="text" name="nome" placeholder="seu nome" required
                        class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Senha</label>
                    <input type="password" name="senha" placeholder="••••••••" required
                        class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
                </div>
                <button type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-medium text-sm py-2.5 rounded-lg transition mt-2">
                    Entrar
                </button>
            </form>
            <p class="text-center text-sm text-gray-500 mt-4">
                Não tem conta?
                <a href="criarUser.php" class="text-orange-500 hover:underline font-medium">Criar conta</a>
            </p>

        </div>
    </div>

</body>

</html>