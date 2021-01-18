<!DOCTYPE html>
<html lang="pt-br">

<?php session_start(); ?>

    <head>
        <meta charset="UTF-8">
        <title>Formulário de inscriçaão</title>
    </head>

    <body>
        <!-- method: apenas metodos get e post
        action = caminho-->
        <h1>Formulário para inscriçaão de competidores</h1>
        <form action="script.php" method="post">
            <p>Nome: <input type="text" name="nome" ></p>
            <p>Idade: <input type="text" name="idade"></p>
            <input type="submit" value="Enviar dados">
        </form>
    </body>
</html>