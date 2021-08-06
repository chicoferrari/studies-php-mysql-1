<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>For dice roll</title>
</head>

<body>
    <h1>Exercício que gera 10 números aleatórios em sequencia.</h1>

    <h2>
        <?php
        for ($count = 1; $count <= 10; $count++) {
            $roll = rand(1, 6);
            echo 'You rolled a <b style="color: blue">' . $roll . '</b>! ';

            if ($roll == 6) {
                echo 'You <b style="color:green">WIN!</b><br>';
            } else {
                echo 'You <b style="color:red">LOSE!</b> Better luck next time<br>';
            }
        }
        echo '<p>Thanks for playing!</p>'
        ?>

</body>

</html>