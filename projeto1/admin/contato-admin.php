<?php
require_once 'config.inc.php';

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

        echo "Nome: {$nome} | ";
        echo "Email: {$email} | ";
        echo "Telefone: {$telefone} | ";
        echo "Mensagem: {$mensagem} | ";

        echo "<a href='?pg=contato-altera&id={$id}'>Alterar</a> | ";
        echo "<a href='?pg=contato-excluir&id={$id}'>Excluir</a>";
        echo "<hr>";
    }
} else {
    echo "<p>Nenhum contato cadastrado.</p>";
}

mysqli_close($conexao);
?>