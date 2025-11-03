<?php
    require_once "config.inc.php";

    $id = $_REQUEST["id"];

    $sql = "SELECT * FROM clientes WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);
    if (mysqli_num_rows($resultado) > 0) {
        while ($dados = mysqli_fetch_array($resultado)) {
            $nome = $dados["cliente"];
            $cidade = $dados["cidade"];
            $estado = $dados["estado"];
            $id = $dados["id"];
        }
     
?>
<form action="?pg=clientes-altera" method="post">

        <input type="text" name="cliente" value="<?=$nome?>"  required><br><br>

        <input type="text"  name="estado" value="<?=$estado?>"  required><br><br>

        <input type="text"  name="cidade" value="<?=$cidade?>" required><br><br>

        <input type="hidden" name="id" value="<?=$id?>">

        <button type="submit">Cadastrar Cliente</button>
</form>
<?php
}else {
        echo "Cliente não encontrado.";
    }

    mysqli_close($conexao);
?>