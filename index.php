<?php
    # gera headers e precisa ser iniciado antes para processar tudo
    # executa e ecoa as coisas pro navegador
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

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
            <?php
                $mensagemDeSucesso = isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
                if(!empty($mensagemDeSucesso))
                {
                    echo $mensagemDeSucesso;
                    unset($mensagemDeSucesso);
                    session_destroy();
                }
                $mensagemDeErro = isset($_SESSION['msg-erro']) ? $_SESSION['msg-erro'] : '';
                if(!empty($mensagemDeErro))
                {
                    echo $mensagemDeErro;
                    unset($mensagemDeErro);
                    session_destroy();
                }

            ?>
        </form>
    </body>
</html>