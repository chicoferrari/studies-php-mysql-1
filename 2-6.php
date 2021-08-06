<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dice roll v3</title>
</head>

<body>
    <h1>Implementação dos exercícios 2-4 e 2-5 que gera um número
        aleatório entre 1 e 6 cujo jogador vence se tirar um 6.</h1>
    <h2>
        <p><?php
            $roll = rand(1, 6);

            echo 'You rolled a ' . $roll;

            if ($roll == 6) {
                echo '<br><br>You <strong style="color: red">WIN</strong>!';
            } else {
                echo '<br><br>You <strong style="color: red">LOSE</strong>, better luck next time!';
            }

            echo '<br><br>Thanks for playing!';
            ?></p>
    </h2>

</body>

</html>