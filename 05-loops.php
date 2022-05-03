<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops (ou laços de repetição)</title>
</head>

<body>
    <h1>Loops (ou laços de repetição)</h1>
    <hr>

    <h2>While (enquanto)</h2>

    <?php
    $i = 1;
    // a condição em si não determina limite de repetição
    while ($i < 4) { // ou $i <= 3
        echo "<p>$i</p>";
        $i++; //atualizar a variável de controle - soma +1 até chegar no 3 e parar
    }

    ?>

    <h2>do/while (faça/enquanto)</h2>

    <?php
    $j = 1;
    do {
    ?>

        <div style="border: solid 1px;">
            <h3>Exemplo <?= $j ?></h3>
        </div>

    <?php
        $j++;
    } while ($j - 6);
    ?>

    <h2>For (para)</h2>

    <?php
    // for (inicialização ; condição ; atualização)
    for ($i = 1; $i - 4; $i++) {
    ?>

        <p>Valor de i é <b><?= $i ?></b></p>

    <?php
    }
    ?>

    <h2>Exercício Array e Loop</h2>
    <p>Crie um array contendo os nomes dos 12 meses do ano.</p>
    <p>Usando um Loop, faça o nome dos meses aparecer em uma lista ordenada.</p>

    <?php
    $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

    $k = 0;

    ?>
    <!--  Lista OL inicia e termina INDEPENDENTEMENTE DO PHP -->
    <ol>
        <?php for ($k = 0; $k < count($meses); $k++) { ?>
            <!-- Itens lista dependem do PHP FOR -->
            <li><?= $meses[$k] ?></li>
        <?php } ?>
    </ol>

    <h2>foreach (para cada)</h2>
    <p>Loop exclusivo para Arrays</p>

    <ol>
        <?php foreach ($meses as $mes) { ?>
            <li> <?= $mes ?> </li>
        <?php } ?>
    </ol>

    <?php
    // Array associativo (formados por pares de chave => valor)
    $curso = [
        // chave (Key) = > valor (value)
        "nome" => "Programador Web",
        "carga-horaria" => 240,
        "unidade" => "Penha",
        "ucs" => 5
    ];

    foreach ($curso as $dados => $valores) {
    ?>
    <p> <?=$dados?> - <?=$valores?> </p>

    <?php } ?>


</body>

</html>