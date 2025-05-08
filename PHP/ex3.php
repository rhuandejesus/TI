<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> 
    
    <!-- Escreva um algoritmo que mostre o menor e o maior dos números reais digitados pelo usuário. Termine a leitura se o usuário digitar zero. -->
    
    <h1>Números Reais</h1>

    <?php

    while (($n = readline()) != 0) $a[] = $n;
    echo "Menor: " . min($a) . "\nMaior: " . max($a);

    ?>


</body>

</html>