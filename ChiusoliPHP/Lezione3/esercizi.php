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
    $media = ($a + $b) / 2;
    echo "La media tra $a e $b è " . $media;

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

    /* Antonio $a, Bruno $B e Carlo $C mangiano al ristorante
Antonio: pasta 9 euro, verdura 5 euro e caffe 1 euro;
Bruno: pasta 8 euro, verdura 6 euro e caffe 1 euro;
Carlo: pasta 11 euro, verdura 4 euro e caffe 1 euro;

Costo medio a persona?
Decidono di dividere in parti uguali, arrotondando all'euro.
Quanto lasciano di mancia? */

    $a_p = 9;
    $a_v = 5;

    $b_p = 8;
    $b_v = 6;

    $c_p = 11;
    $c_v = 4;

    $c = 1;

    $tot = $a_p + $a_v + $b_p + $b_v + $c_p + $c_v + 3 * $c;

    echo "Il costo totale è $tot euro <br>";
    $media = $tot / 3;
    echo "Il costo medio a persona è di " . $media;


    echo "<br> Il costo medio a personaarrotondato è " . ceil($media) . " euro <br>";  // ceil arrotonda per eccesso

    $mancia = ceil($media) * 3 - $tot;

    if ($mancia == 0) {
        echo "Non c'è mancia";
    } else
        echo "La mancia è " . $mancia . " euro";


    echo "<hr> <h2>Esercizio 6</h2>";

    ?>
</body>

</html>