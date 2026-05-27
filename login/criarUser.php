<?php
require_once "../conexao.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'] ? $_POST['email'] : null;
    $telefone = $_POST['telefone'] ? $_POST['telefone'] : null;
    $senha = $_POST['senha'];

    function criarConta($con, $nome, $email, $telefone, $senha) {
        $stmt = $con->prepare("INSERT INTO registros (nome, email, telefone, senha) VALUES (:nome, :email, :telefone, :senha)");
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":telefone", $telefone);
        $stmt->bindValue(":senha", password_hash($senha, PASSWORD_DEFAULT));
        return $stmt->execute();
    }

    if(!empty($_POST['email'])) {
        $stmt = $con->prepare("SELECT id FROM registros WHERE email = :email");
        $stmt->bindValue(":email", $_POST['email']);
        $stmt->execute();
        if($stmt->fetch()) {
            $erro = "Este email já está cadastrado.";
        }
    }

    if(empty($erro)) {
        if(criarConta($con, $nome, $email, $telefone, $senha)) {
            $sucesso = "Conta criada com sucesso!";
        } else {
            $erro = "Erro ao criar conta. Tente novamente.";
        }
    }

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta — Hambre</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-sm">

        <div class="text-center mb-8">
            <img src="/Sistema-Restaurante/assets/LogoRest.png" alt="Logo Hambre" class="w-24 h-24 object-contain rounded-xl mb-1 mx-auto">
            <p class="text-base text-gray-500">Criar nova conta</p>
        </div>

        <div class="bg-white rounded-xl border border-gray-200 p-8">

            <?php if(!empty($erro)): ?>
                <div class="bg-red-50 border border-red-200 text-red-500 text-sm px-4 py-3 rounded-lg mb-5"><?= $erro ?></div>
            <?php endif; ?>

            <?php if(!empty($sucesso)): ?>
                <div class="bg-green-50 border border-green-200 text-green-600 text-sm px-4 py-3 rounded-lg mb-5"><?= $sucesso ?></div>
            <?php endif; ?>

            <form action="" method="post" class="space-y-4">
                <div>
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Nome</label>
                    <input type="text" name="nome" placeholder="seu nome" required
                        class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Email</label>
                    <input type="email" name="email" placeholder="seu@email.com"
                        class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Telefone</label>
                    <input type="text" name="telefone" placeholder="(00) 00000-0000" maxlength="11"
                        class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
                </div>
                <div>
                    <label class="block text-xs font-medium text-gray-500 uppercase tracking-wider mb-1">Senha</label>
                    <input type="password" name="senha" placeholder="••••••••" required
                        class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-800 outline-none focus:border-orange-400 focus:ring-2 focus:ring-orange-100 transition">
                </div>
                <button type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-medium text-sm py-2.5 rounded-lg transition mt-2">
                    Criar Conta
                </button>
            </form>
        </div>

        <p class="text-center text-sm text-gray-500 mt-4">
            Já tem conta?
            <a href="index.php" class="text-orange-500 hover:underline font-medium">Entrar</a>
        </p>

    </div>

</body>
</html>