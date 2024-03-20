<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <?php
        $peso = 140;
        $altura = 1.69;
        $imc = $peso / $altura**2;

        if ($imc < 18.5) {
            $classificacao = "Magreza";
        } else if ($imc <= 24.9) {
            $classificacao = "Normal";
        } else if ($imc <= 29.9) {
            $classificacao = "Sobrepeso";
        } else if ($imc <= 39.9) {
            $classificacao = "Obesidade";
        } else {
            $classificacao = "Obesidade grave";
        };

        echo "Peso: $peso <br>";
        echo "Altura: $altura cm<br>";
        echo "IMC: $imc <br>";
        echo "Classificação: $classificacao";
    ?>
</body>
</html>