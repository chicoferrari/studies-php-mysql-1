<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dice roll</title>
</head>

<body>
    <h1>Exercício que gera um número aleatório entre 1 e 6
        cujo jogador vence se tirar um 6.</h1>
    <h2>
        <p><?php
            $roll = rand(1, 6);

            echo 'You rolled a ' . $roll;

            if ($roll == 6) {
                echo '<br><br>You <strong style="color: red">WIN</strong>!';
            }
            ?></p>
    </h2>

</body>

</html>