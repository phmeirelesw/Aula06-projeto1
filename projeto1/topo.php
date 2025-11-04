<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 1 - Página Inicial</title>
    <link rel="stylesheet" href="projeto.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">           
</head>
<body>
<?php
    echo <<<HTML
    <header>
           <img id="logo" src="logoamen-bege.png"
            alt="Logo Amen">
        <nav>
            <a id="botao" href="index.php"><strong>Início</strong></a>
            <a id="botao" href="?pg=sobre"><strong>Sobre Nós</strong></a>
            <a id="botao" href="?pg=clientes"><strong>Clientes</strong></a>
            <a id="botao" href="?pg=contato-form"><strong>Contato</strong></a>
        </nav>
    </header>
    HTML;
?>