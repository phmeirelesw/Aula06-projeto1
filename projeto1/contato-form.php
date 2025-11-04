<?php

    echo <<< HTML
    <div class="contato">
        
        <div class="form-box">

            <h2 class="form-title">Entre em Contato Conosco</h2>
    HTML;
?>
            <form action="?pg=contato" method="post">

                <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" required><br><br>
    
                <input type="email" id="email" name="email" placeholder="Digite seu Email" required><br><br>

                <input type="tel" id="telefone" name="telefone" placeholder="Digite seu Número" required><br><br>

                <textarea id="mensagem" name="mensagem" placeholder="Digite sua Mensagem" required></textarea><br><br>

                <button type="submit">Enviar Mensagem</button>

            </form>

        </div>

    </div>