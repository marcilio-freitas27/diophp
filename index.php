<?php
    # gera headers e precisa ser iniciado antes para processar tudo
    # executa e ecoa as coisas pro navegador
    include "servicos/servicoMensagemSessao.php";
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
        <h1>Formulário para inscrição de competidores</h1>
        <form action="script.php" method="post">
            <p>Nome: <input type="text" name="nome" ></p>
            <p>Idade: <input type="text" name="idade"></p>
            <input type="submit" value="Enviar dados">
            <?php
                //operadores ternários = ? e : (if e else)
                $mensagemDeSucesso = obterMensagemSucesso();
                if(!empty($mensagemDeSucesso))
                {
                    echo $mensagemDeSucesso;
                    removerMensagemSucesso();
                }
                $mensagemDeErro = obterMensagemErro();
                if(!empty($mensagemDeErro))
                {
                    echo $mensagemDeErro;
                    removerMensagemErro();
                }

            ?>
        </form>
    </body>
</html>