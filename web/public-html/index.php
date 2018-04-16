<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prueba de CI</title>
    </head>
    <body>
        <?php $hostname = gethostname(); $ip = gethostbyname($hostname); ?>

        <h1>Hola mundo xD</h1>
        <p>Saludos desde <b>[<?php echo $hostname ?>]</b>  <b>[<?php echo $ip ?>]</b </p>
    </body>
</html>
