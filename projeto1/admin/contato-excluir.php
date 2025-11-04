<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM contato WHERE id='$id'";

   if ($resultado  = mysqli_query($conexao, $sql)) {
    echo "<br><h2>Contato excluído com sucesso!</h2>";
    echo "<br><a href='?pg=contato-admin'>Voltar para a Administração de Contatos</a>";
    } else {
    echo "<br><h2>Erro ao excluir contato!</h2>";
    echo "<br><a href='?pg=contato-admin'>Voltar para a Administração de Contatos</a>";
    }