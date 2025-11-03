<?php

    require_once "admin/config.inc.php";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<h1>Clientes</h1>";
        while ($dados = mysqli_fetch_array($resultado)) {
            echo "<br>";
            echo "<p> Cliente: $dados[cliente] | Cidade: $dados[cidade] | Estado: $dados[estado]</p>";
            echo "<br>";
            echo "<hr>";
        }
    } else {
        echo "<p>Nenhum cliente cadastrado.</p>";
    }
