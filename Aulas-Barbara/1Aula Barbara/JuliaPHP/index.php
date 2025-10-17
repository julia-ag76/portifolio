<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $n1 = 10;
        $n2 = 8;

        $adicao = $n1+$n2;
        $subtracao = $n1-$n2;
        $divisao = $n1/$n2;
        $multiplicacao = $n1*$n2;

        echo "adição: $adicao<br>";
        echo "subtração: $subtracao<br>";
        echo "divisão: $divisao<br>";
        echo "multiplicação: $multiplicacao<br><br>";

        if ($divisao > 2) {
            echo "divisão maior que 2";
        } elseif ($divisao == 2) {
            echo "divisão igual que 2";
        } else {
            echo "divisão menor que 2";
        }
    ?>

</body>
</html>