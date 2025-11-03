<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">           

</head>
<body>
    <style>
    html{
    box-sizing: border-box;  /* inclui bordas e padding na largura total */
    height: 100%;
    }

    body {
    font-family: "Montserrat", sans-serif;
    background-color: #f4f3b9;
    margin: 0;
    padding: 0px;
    display: flex;
    flex-direction: column;
    min-height: 100vh;  /* garante que o body ocupe toda a altura da viewport */
        }
    h1{
    text-align: center;
    }

    /*FORMULÁRIO*/

    *,::after,::before{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body, textarea{
    font-family:"Montserrat", serif;
    }   

    .form-box form {
    padding: 32px;
    display: flex;
    flex-wrap: wrap;
    align-items: start;
    }

    .contato{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100vh;
    }

    .form-box{
    display: flex;
    flex-direction: column;
    border-radius: 8px;
    width: 700px;
    background-color: #3b0e68;
    }

    .form-box .form-title{
    padding: 24px 32px;
    font-size: 24px;
    border-bottom: thin solid #f4f3b9;
    color: #f4f3b9;
    }

    .form-box input,
    .form-box textarea{
    font-family:"Montserrat", serif;
    margin-bottom: 16px;
    padding-left: 16px;
    border: thin solid #f4f3b9;
    font-size: 16px;
    border-radius: 8px;
    width: calc(50% - 8px);
    height: 48px;
    background-color: #f4f3b9;
    }

    .form-box input:first-child{
    margin-right: 16px;
    }

    .form-box input[name=cidade]{
    width: 100%;
    }

    .form-box textarea{
    height: 180px;
    padding: 16px;
    width: 100%;
    }

    .form-box button{
    font-family:"Montserrat", serif;
    display: block;
    border: none;
    outline: none;
    width: 180px;
    height: 48px;
    border-radius: 8px;
    background-color: #f4f3b9;
    color: #3b0e68;
    font-size: 16px;
    cursor: pointer;
    font-weight: bold;

    }

    .form-box button:hover{
    background-color: #fdcf7a;
    transition: 0.3s;
    transform: scale(1.1);
    }
    </style>
    
<?php

    require_once "config.inc.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cliente = $_POST["cliente"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
    } else {
        die("Acesso inválido.");
    }
        $sql = "INSERT INTO clientes (cliente, cidade, estado)
        VALUES ('$cliente', '$cidade', '$estado')";
        
        if (mysqli_query($conexao, $sql)) {
            echo "Novo cliente cadastrado com sucesso!";
            echo "<p><a href='?pg=clientes-admin'>Voltar para Administração de Clientes</a></p>";
        } else {
            echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
        }
    

    mysqli_close($conexao);
?>
</body>
</html>