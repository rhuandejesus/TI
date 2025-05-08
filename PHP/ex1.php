<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<!-- Crie um programa em PHP que imprima os números primos de 1 a 100. Um numero primo é um numero divisível por 1 e por ele mesmo (sem resto). -->

    <h1>Números Primos de 1 a 100</h1>

    <?php
    for ($n = 2; $n <= 100; $n++) {
        $primo = true;
        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                $primo = false;
                break;
            }
        }
        if ($primo) echo "$n\n";
    }
    ?>
</body>

</html>