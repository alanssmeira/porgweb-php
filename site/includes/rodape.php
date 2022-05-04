</main>

<footer>
    <p>Site desenvolvido como exemplo</p>
    <?php
        $dataHora = new DateTime();
        $dataHora->setTimezone(new DateTimeZone('America/Sao_Paulo'));
        $DateAndTime = $dataHora->format("d-m-Y h:i:s a");
    ?>

    <!-- ** CORREÇÃO -->
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/Y H:i")
    ?>

    <p><?=$DateAndTime?></p>

    <!-- ** CORREÇÃO -->
    <p><?=$data?></p>

</footer>

</body>

</html>