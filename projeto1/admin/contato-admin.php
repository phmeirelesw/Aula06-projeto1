<?php
require_once 'config.inc.php';

echo "<h1 style='text-align: center;'>Administração de Cadastros</h1>";
echo "<br>";
echo "<br>";

$sql = "SELECT * FROM contato";
$resultado = mysqli_query($conexao, $sql);

echo "<div style='text-align: center;'>";
echo "<h2>Lista de Contatos Cadastrados:</h2>";
echo "<br>";
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
        echo "<br>";
        echo "<a href='?pg=contato-altera-form&id={$id}'>Alterar</a> | ";
        echo "<a href='?pg=contato-excluir&id={$id}'>Excluir</a>";
        echo "<hr>";
    }
} else {
    echo "<p>Nenhum contato cadastrado.</p>";
}
echo "</div>";
mysqli_close($conexao);
?>