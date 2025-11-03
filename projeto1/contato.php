<?php

    require_once __DIR__ . "/admin/config.inc.php";

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        die("Acesso inválido.");
    }
    
    
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telefone = trim($_POST['telefone'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

    $errors = [];
if ($nome === '') $errors[] = 'Nome obrigatório.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email inválido.';
if ($mensagem === '') $errors[] = 'Mensagem obrigatória.';

if (!empty($errors)) {
    foreach ($errors as $err) {
        echo "<p style='color:red;'>".htmlspecialchars($err, ENT_QUOTES, 'UTF-8')."</p>";
    }
    exit;
}

$stmt = mysqli_prepare($conexao, "INSERT INTO contato (nome, email, telefone, mensagem) VALUES (?, ?, ?, ?)");
if ($stmt === false) {
    echo "Erro na preparação: " . mysqli_error($conexao);
    exit;
}
mysqli_stmt_bind_param($stmt, "ssss", $nome, $email, $telefone, $mensagem);

if (mysqli_stmt_execute($stmt)) {
    echo "Formulário cadastrado com sucesso!";
    echo "<p><a href='?pg=contato-admin'>Voltar para Administração de Cadastros</a></p>";
} else {
    echo "Erro: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);
?>
</body>
</html>