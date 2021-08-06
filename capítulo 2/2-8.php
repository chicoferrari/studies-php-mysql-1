<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dice roll v5</title>
</head>

<body>
    <h1>Versão alternativa do exercício 2-7 que gera um número
        aleatório entre 1 e 6 cujo jogador vence se tirar 5 ou 6.</h1>
    <h2>
        <p><?php
            $roll = rand(1, 6);

            echo 'You rolled a ' . $roll;

            if ($roll > 4) {
                echo '<br><br>You <strong style="color: red">WIN</strong>!';
            } else {
                echo '<br><br>You <strong style="color: red">LOSE</strong>, better luck next time!';
            }

            echo '<br><br>Thanks for playing!';
            ?></p>
    </h2>

</body>

</html>