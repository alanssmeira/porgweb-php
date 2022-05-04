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

    <?php
    const ESCOLA = "Senac";
    $curso = "Programador Web";
    $tecnologias = ["HTML", "CSS", "JavaScript", "PHP"];

    function verificaIdade(int $valor):string {
        if ($valor >= 18) {
            return "maior";
        } else {
            return "menor";
        }
    }
    ?>

    <h2> <?=ESCOLA?></h2>
    <p>Estamos no curso de <?=$curso?> </p>

    <ol>

        <?php foreach ($tecnologias as $tecnologia) { ?>
            <li> <?= $tecnologia ?> </li>
        <?php } ?>

    </ol>

    <p>Chapolin Colorado tem 20 anos e é <b> <?=verificaIdade(20)?> </b> de idade.</p>

    <p>Chapolin Colorado tem 16 anos e é <b> <?=verificaIdade(16)?> </b> de idade.</p>


    
</body>
</html>