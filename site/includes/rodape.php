</main>

<footer>
    <p>Site desenvolvido como exemplo</p>
    <?php
        $dataHora = new DateTime();
        $dataHora->setTimezone(new DateTimeZone('America/Sao_Paulo'));
        $DateAndTime = $dataHora->format("d-m-Y h:i:s a");
        ?>
    <p><?=$DateAndTime?></p>

</footer>

</body>

</html>