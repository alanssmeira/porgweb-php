<?php include "recursos.php" ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>

<body>
    <h1>Inclusão de Recursos</h1>
    <hr>


    <h2> <?= ESCOLA ?></h2>
    <p>Estamos no curso de <?= $curso ?> </p>

    <ol>

        <?php foreach ($tecnologias as $tecnologia) { ?>
            <li> <?= $tecnologia ?> </li>
        <?php } ?>

    </ol>

    <p>Chapolin Colorado tem 20 anos e é <b> <?= verificaIdade(20) ?> </b> de idade.</p>

    <p>Chapolin Colorado tem 16 anos e é <b> <?= verificaIdade(16) ?> </b> de idade.</p>

    <!-- include é incluir, se der erro o restante fica nnormal - require é requirir, essencial. Se der erro para tudo que vem depois -->
    
    <article>
        <h2>Conteúdo qualquer</h2>
        <?php require "textos.php" ?>
    </article>

    <hr>

    <article>
        <h2>batatinha frita 1, 2, 3...</h2>
        <?php include "textos.php" ?>
    </article>


</body>

</html>