<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>While</title>
</head>

<body>
    <h1>Exercício que incrementa o contador até 10.</h1>

    <h2 style="color:blueviolet">
        <?php

        $count = 1;

        while ($count <= 10) {
            echo $count . '<br> ';
            ++$count;
        }
        ?>
    </h2>

</body>

</html>