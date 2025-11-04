<?php
    require_once "config.inc.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "UPDATE contato SET nome='$nome', email='$email', telefone='$telefone', mensagem='$mensagem'" ;

   if ($resultado  = mysqli_query($conexao, $sql)) {
    echo "<br><h2>Contato alterado com sucesso!</h2>";
    echo "<br><a href='?pg=contato-admin'>Voltar para a Administração de Contatos</a>";
    } else {
    echo "<br><h2>Erro ao alterar contato!</h2>";
    echo "<br><a href='?pg=contato-admin'>Voltar para a Administração de Contatos</a>";
    }