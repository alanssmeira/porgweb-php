<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>

<body>
    <h1>Processamento de dados</h1>
    <hr>

    <?php

    if (empty($_POST["nome"]) || empty($_POST["email"])) { ?>

        <p style="color:red;">Por favor preencha nome e/ou e-mail!</p>
        <p><a href="08-formulario.html">Voltar</a></p>
    <?php
        
    } else {

    // Capturando os dados a partir do formulário
    /* echo "<pre>";
    var_dump($_POST);
    echo "</pre>"; */

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    /* Se existir o $_POST['interesses], o que foi selecionado fica na variável. Caso o contrário. deixe um array vazio na variável
    
    ??  Operador de coalescência*/
    $interesses = $_POST["interesses"]??[];
    $informativos = $_POST["informativos"];
    $mensagem = $_POST["mensagem"];

    ?>

    <h2>Dados</h2>
    <ul>
        <li> Nome: <?=$nome?> </li>
        <li> Email: <?=$email?> </li>
        <li> Idade: <?=$idade?> </li>
        <!-- Aqui usamos o operador de negação ( ! ) para inverter a lógica da função empty -->
        <!-- Se interesses NÃO ESTIVER VAZIO -->
        <?php if(!empty($interesses)){ ?>
            <!-- então, faça tudo abaixo: -->
        <li> Interesses:
            <ul>
                <?php foreach ($interesses as $interesse) { ?>
                    <li> <?=$interesse?> </li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
        <li> Informativos: <?=$informativos?> </li>
        <li> Mensagem: <?=$mensagem?> </li>
    </ul>

    <?php } ?>
        

</body>

</html>