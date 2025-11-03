<?php
    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['cliente'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "UPDATE clientes SET cliente='$nome', cidade='$cidade', estado='$estado' WHERE id='$id'";

   if ($resultado  = mysqli_query($conexao, $sql)) {
    echo "<br><h2>Cliente alterado com sucesso!</h2>";
    echo "<br><a href='?pg=clientes-admin'>Voltar para a Administração de Clientes</a>";
    } else {
    echo "<br><h2>Erro ao alterar cliente!</h2>";
    echo "<br><a href='?pg=clientes-admin'>Voltar para a Administração de Clientes</a>";
    }
