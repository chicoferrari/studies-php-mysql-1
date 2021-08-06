<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dice roll v6</title>
</head>

<body>
    <h1>Implementação dos exercício 2-4 e 2-5 que gera dois números
        aleatórios entre 1 e 6 cada, cujo jogador vence se tirar 6 e 6.</h1>
    <h2>
        <p><?php
            $roll1 = rand(1, 6);
            $roll2 = rand(1, 6);

            echo 'You rolled a ' . $roll1 . ' and a ' . $roll2;

            if ($roll1 == 6 && $roll2 == 6) {
                echo '<br><br>You <strong style="color: red">WIN</strong>!';
            } else {
                echo '<br><br>You <strong style="color: red">LOSE</strong>, better luck next time!';
            }

            echo '<br><br>Thanks for playing!';
            ?></p>
    </h2>

</body>

</html>