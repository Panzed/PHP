<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi PHP</title>
</head>

<body>
    <h1>Esercizi PHP</h1>

    <h2>Esercizio 1</h2>
    <?php

    //Dati $a e $b, calcolare la media tra i 2 numeri e stampare il risultato
    $a = 10;
    $b = 20;
    $mesia = ($a + $b) / 2;
    echo "La media tra $a e $b è " . $mesia;

    echo "<hr> <h2>Esercizio 2</h2>";

    //Scrivere se la variabile $x è multipla di 3 e stampa vero o falso
    $x = 9;
    echo ($x % 3 == 0) ? "$x è multiplo di 3" : "<br> $x non è multiplo di 3";

    echo "<hr> <h2>Esercizio 3</h2>";

    //Invertire il contenuto di $x e $y
    $x = 10;
    $y = 20;

    $z = $x;
    $x = $y;
    $y = $z;
    echo "x = $x, y = $y";

    echo "<hr> <h2>Esercizio 4</h2>";

    //2 fratelli hanno $f1 e $f2 anni: calcolare la differenza di età (non è detto che $f1 sia maggiore di $f2!)
    $f1 = 20;
    $f2 = 10;
    echo ($f1 > $f2) ? "Fratello1 è più grande e la differenza di età è " . ($f1 - $f2) : "<br> Fratello2 è più grande e la differenza di età è " . ($f2 - $f1);

    echo "<hr> <h2>Esercizio 5</h2>";

    //Dato $numero scrivere a quale decina appartiene (es 1 nella 1° decina, 11 nella 2°, 21 nella 3°, ecc.)

    ?>
</body>

</html>