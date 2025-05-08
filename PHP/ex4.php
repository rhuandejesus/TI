<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>

<!-- Faça um algoritmo que mostre a tabuada de qualquer número escolhido pelo usuário (considerar tabuada do número 1 ao 10). -->

    <h2>Digite um número para ver a tabuada:</h2>
    <form method="post">
        <input type="number" name="numero" required>
        <button type="submit">Mostrar Tabuada</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = (int) $_POST["numero"];
        echo "<h3>Tabuada do $n</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$n x $i = " . ($n * $i) . "<br>";
        }
    }
    ?>
</body>
</html>
