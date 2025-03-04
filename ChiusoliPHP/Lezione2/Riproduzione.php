<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

<?php

echo "<h3> Date 2 variabili a=1 e b=2, scambia il loro contenuto </h3>";
    //scambiare il contenuto di $a e $b
    //se a=1 e b=2 ... deve diventare a=2 e b=1

$a = 1;
$b = 2;

$c = $a;
$a = $b;
$b = $c;

echo "La variabile \$a = $a e la variabile \$b = $b"



    ?>
</body>

</html>