<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<!-- Crie um programa em PHP que imprima os números pares entre 1000 e 2000; -->

    <h1>Números Pares de 1 a 100</h1>

    <?php

    for ($i = 1000; $i <= 2000; $i++) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }

    ?>


</body>

</html>