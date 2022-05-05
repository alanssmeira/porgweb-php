<!-- Parte 1:
$_SERVER['PHP_SELF'] -> traz os dados completos do endereço
basename($_SERVER['PHP_SELF']) -> extrai apenas o nome.extensão -->

<?php
$pagina = basename($_SERVER['PHP_SELF']);
echo $pagina;

/* Parte 2: Condicional para avaliar qual página está aberta e definir qual titulo usar. */
switch ($pagina) {
    case 'index.php': $titulo = "Página Inicial"; break;
    case 'produtos.php': $titulo = "Produtos"; break;
    case 'servicos.php': $titulo = "Serviços"; break;
    
    default: $titulo = 'Contato'; break;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Parte 3: Colocar a variável no title -->
    <title><?=$titulo?> - Site XYZ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1>Site XYZ</h1>

        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <main>