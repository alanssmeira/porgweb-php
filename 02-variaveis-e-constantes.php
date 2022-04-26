<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 02-variaveis-e-constantes.php -->
    <title>Variáveis e Constantes</title>
</head>
<body>
    
    <h1>manipulando dados na memória</h1>
    <hr>

    <?php
    // Variáveis
    $curso = "Programador Web";
    $ano = 2022;
    $preco = 2500.42;

    echo "<h2>Saída de dados completa</h2>";
    echo "<p><b>$curso</b></p>";
    echo "<p>$ano</p>";
    echo "<p>$preco</p>";
    ?>

    <h2>Saída de dados intercalando HTML e PHP</h2>

    <p> <?php echo $curso ?> </p>

    <p><b> <?=$curso?> </b></p> <!-- sintaxe abreviada de saída -->
    <p> <?=$ano?> </p> 
    <p> <?=$preco?> </p>

    <p>
        Estamos fazendo o curso de <?=$curso?>, no ano de <?=$ano?>.
    </p>

    <?php
    // Constantes
    // Forma 1:
    define("MEU_NOME", "Tiago");

    // Forma 2:
    const ESCOLA = "Senac Penha";
    ?>

</body>
</html>