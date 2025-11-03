<?php

    require_once __DIR__ . '/config.inc.php';

    $sql = "SELECT * FROM contato";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<h1>Contatos</h1>";
        while ($dados = mysqli_fetch_array($resultado)) {
            echo "<br>";
            echo "<p> Nome: $dados[nome] | Email: $dados[email] | Telefone: $dados[telefone] | Mensagem: $dados[mensagem]</p>";
            echo "<br>";
            echo "<hr>";
        }
    } else {
        echo "<p>Nenhum contato cadastrado.</p>";
    }