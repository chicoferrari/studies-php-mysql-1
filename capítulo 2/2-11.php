<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>For</title>
</head>

<body>
    <h1>Exercício que acrescenta 3 números ao contator até chegar a 10.</h1>

    <h2 style="color: green">
        <p>
            <?php

            for ($count = 1; $count <= 10; $count = $count + 3) {

                echo $count . ' ';
            }

            ?>
        </p>
    </h2>

</body>

</html>