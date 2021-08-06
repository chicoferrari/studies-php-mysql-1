<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Do While</title>
</head>

<body>
    <h1>Exercício que gera um número aleatório
        em sequencia até sair o número 6.</h1>

    <h2>
    <?php
    $roll = 0;
    while ($roll != 6) {
        $roll = rand(1, 6);
        echo '<p>You rolled a ' . $roll . '</p>';

        if ($roll == 6) {
            echo '<p>YOU <b style="color:green">WIN</b>!</p>';
        } else {
            echo '<p>Sorry, you didn\'t win, better luck next time!</p>';
        }
    }
    ?>
    </h2>

</body>

</html>