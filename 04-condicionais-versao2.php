<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 04-condicionais-php -->
    <title>Condicionais Versão 2</title>
    <style>
        .aprovado {
            color: blue;
        }

        .reprovado {
            color: red;
        }

        .recuperacao {
            color: orange;
        }
    </style>
</head>

<body>

    <h1>Condicionais - Versão 2</h1>
    <hr>

    <h2>Condicional Simples</h2>

    <?php

    $numero = 5;
    $outroNumero = 1;
    if ($numero > $outroNumero) { // inicio condicional
    ?>
        <p><?= $numero ?> é maior que <?= $outroNumero ?> </p> <!-- retorno da condicional -->
    <?php
    } // fim da condicional
    ?>

    <h2>Composta</h2>

    <?php
    $nota1 = 6.99;
    $nota2 = 6;
    $media = ($nota1 + $nota2) / 2;
    ?>

    <p>Média: <?=$media?></p>

    <?php
    if ($media >= 7) {
    ?>

    <p class="aprovado">Aprovado</p>
    <?php
    } else {
    ?>

    <p class="reprovado">Reprovado</p>

    <?php
    }
    ?>

    <h2>Encadeada</h2>

    <?php
    if ($media >= 7) {
        // barra invertida serve como "escape" do que está entre elas, fazendo a linguagem interpretar como texto
    ?>

    <p class="aprovado">Aprovado</p>

    <?php
        // && permite adicionar mais condições, e só é válido se todos forem verdadeiros
    } elseif ($media >= 6 && $media < 7) {
    ?>
    
    <p class='recuperacao'>Recuperação</p>

    <?php
    } else {
        ?>
    <p class='reprovado'>Reprovado</p>

    <?php
    }
    ?>

    <h2>Switch/case</h2>

    <?php
    $opcao = 1;

    switch ($opcao) {
        case 1:
            $assunto = '<p>Reclamação</p>';
            break;
        case 2:
            $assunto = '<p>Elogio</p>';
            break;
        case 3:
            $assunto = '<p>Informações</p>';
            break;
        default:
            $assunto = '<p>Falar com um humano</p>';
            break;
    }
    ?>

    <p><?=$assunto?></p>

</body>

</html>