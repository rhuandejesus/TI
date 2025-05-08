<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Pesquisa de Produto</title>
</head>

<body>
    <!-- Uma firma fez uma pesquisa de mercado para saber se as pessoas gostaram ou não de um novo produto lançado. 
    Para isso forneceu o sexo (M / F) do entrevistado e sua resposta (S / N). Sabe-se que entrevistaram 10 pessoas. Faça um algoritmo que calcule e mostre: ​
    O número de pessoas que respondeu sim; ​
    O número de pessoas que respondeu não; ​
    A porcentagem de homens que respondeu Não entre todos os homens analisados. ​
    A porcentagem de mulheres que respondeu Não entre todos as mulheres analisadas. ​ -->

    ​

    <h2>Pesquisa de Opinião - Novo Produto</h2>
    <form method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <fieldset>
                <legend>Entrevistado <?= $i ?></legend>
                Sexo:
                <select name="sexo[]">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select><br><br>
                Resposta:
                <select name="resposta[]">
                    <option value="S">Sim</option>
                    <option value="N">Não</option>
                </select>
            </fieldset>
            <br>
        <?php endfor; ?>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sexo = $_POST['sexo'] ?? [];
        $resposta = $_POST['resposta'] ?? [];

        $sim = $nao = 0;
        $homens = $mulheres = 0;
        $homensNao = $mulheresNao = 0;

        for ($i = 0; $i < count($sexo); $i++) {
            $s = strtoupper($sexo[$i]);
            $r = strtoupper($resposta[$i]);

            if ($r == 'S') $sim++;
            if ($r == 'N') $nao++;

            if ($s == 'M') {
                $homens++;
                if ($r == 'N') $homensNao++;
            } elseif ($s == 'F') {
                $mulheres++;
                if ($r == 'N') $mulheresNao++;
            }
        }

        echo "<h3>Resultados da Pesquisa</h3>";
        echo "<p>Total que responderam <strong>SIM</strong>: $sim</p>";
        echo "<p>Total que responderam <strong>NÃO</strong>: $nao</p>";

        if ($homens > 0)
            echo "<p>Porcentagem de <strong>homens</strong> que disseram NÃO: " . round($homensNao / $homens * 100, 2) . "%</p>";
        else
            echo "<p>Nenhum homem foi analisado.</p>";

        if ($mulheres > 0)
            echo "<p>Porcentagem de <strong>mulheres</strong> que disseram NÃO: " . round($mulheresNao / $mulheres * 100, 2) . "%</p>";
        else
            echo "<p>Nenhuma mulher foi analisada.</p>";
    }
    ?>
</body>

</html>