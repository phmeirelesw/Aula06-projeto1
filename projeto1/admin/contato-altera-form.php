<?php
    require_once "config.inc.php";

    $id = $_REQUEST["id"];

    $sql = "SELECT * FROM contato WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        while ($dados = mysqli_fetch_array($resultado)) {
            $nome = $dados["nome"];
            $email = $dados["email"];
            $telefone = $dados["telefone"];
            $mensagem = $dados["mensagem"];
            $id = $dados["id"];
        }
     
?>
<form action="?pg=clientes-altera" method="post">

        <input type="text" name="nome" value="<?=$nome?>"  required><br><br>

        <input type="text"  name="email" value="<?=$email?>"  required><br><br>

        <input type="number"  name="telefone" value="<?=$telefone?>" required><br><br>

        <input type="text"  name="mensagem" value="<?=$mensagem?>"  required><br><br>

        <input type="hidden" name="id" value="<?=$id?>">

        <button type="submit">Cadastrar Cliente</button>
</form>
<?php
}else {
        echo "Cliente não encontrado.";
    }

    mysqli_close($conexao);
?>