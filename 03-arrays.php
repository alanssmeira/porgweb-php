<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 30-arrays.php -->
    <title>Arrays</title>
</head>
<body>
    <h1>Usando arrays no PHP</h1>
    <hr>

    <h2>Array com índice numérico</h2>

    <?php
    // Sintaxe com colchetes
    $alunos = ["Maria", "João", "Mônica"];

    // Sintaxe usando a função array()
    $cursos = array("HTML5", "React", "Node.Js", "PHP");

    ?>

    <h3>Acessando os dados</h3>
    <ul>
        <li> <?=$alunos[2]?> </li>
        <li> <?=$cursos[1]?> </li>
    </ul>

    <hr>

    <h2>Array associativo</h2>

    <?php
    $curso = [
        "nome" => "Programador Web",
        "carga-horaria" => 240,
        "unidade" => "Penha",
        "ucs" => 5
    ]
    ?>

    <p>
        O curso de <?=$curso["nome"]?> tem <?=$curso["carga-horaria"]?> horas.
    </p>

    <hr>

    <h2>Funções de teste (debug)</h2>

    <pre>
    <?=print_r($cursos)?>
    </pre>

    <!-- mostra detalhes da arrays e objetos -->
    <pre>
        <?=var_dump($cursos)?>
    </pre>

    


</body>
</html>