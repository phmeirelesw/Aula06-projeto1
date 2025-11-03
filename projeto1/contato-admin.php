<?php
require_once __DIR__ . '/admin/config.inc.php';

echo "<h2>Administração de Cadastros</h2>";

$sql = "SELECT * FROM contato";
$resultado = mysqli_query($conexao, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $id = (int)$dados['id'];
        $nome = htmlspecialchars($dados['nome'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($dados['email'], ENT_QUOTES, 'UTF-8');
        $telefone = htmlspecialchars($dados['telefone'], ENT_QUOTES, 'UTF-8');
        $mensagem = htmlspecialchars($dados['mensagem'], ENT_QUOTES, 'UTF-8');

        echo "ID: {$id} | ";
        echo "Nome: {$nome} | ";
        echo "Email: {$email} | ";
        echo "Telefone: {$telefone} | ";
        echo "Mensagem: {$mensagem} | ";

        // links para editar/excluir (ajuste URL conforme sua lógica)
        echo "<a href='contato-admin.php?action=edit&id={$id}'>Alterar</a> | ";
        echo "<a href='contato-admin.php?action=delete&id={$id}' onclick=\"return confirm('Excluir este contato?')\">Excluir</a>";
        echo "<hr>";
    }
} else {
    echo "<p>Nenhum contato cadastrado.</p>";
}

echo "<p style='text-align:center; text-decoration:underline; font-family:Montserrat, sans-serif;'><a href='?pg=clientes-cadastro-form'>Cadastro de Clientes</a></p>";

mysqli_close($conexao);
?>