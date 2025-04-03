<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = [1, 2, -5, 0, 9, -1, 0, 16];

    //elencare tutte gli interi presenti nell'array, scrivendo in grassetto quelli minori di 0;

    foreach ($a as $numero) {
        if ($numero >= 0) {
            echo $numero;
        } else
            echo "<b> $numero </b>";
        echo "<br>";
    }

    echo "<hr>";

    // scrivere il massimo ed il minimo intero presente nell’array;


    $max = $min = 0;
    $positivi = 0;
    $somma = 0;
    $n_ripetuto = 0;
    $posizioni = [];

    foreach ($a as $i => $numero) {
        if ($numero > $max) {
            $max = $numero;
            // calcolare il valore medio degli interi positivi;
            $positivi++;
            $somma += $numero;
        } elseif ($numero < $min) {
            $min = $numero;
        }
        // calcolare quante volte è presente il numero 0
        if ($numero == 0) {
            $n_ripetuto++;
            // in quali posizioni è presente il numero 0?
            $posizioni[] = $i;
        }
    }

    echo "Il numero massimo è: $max";
    echo " Il numero minimo è: $min";
    echo " La media dei positivi è di: " . $somma / $positivi;
    echo " Il numero 0 si ripete $n_ripetuto volte";
    echo " Il numero 0 si ripete nelle posizioni ";
    foreach ($posizioni as $posizione) {
        echo "$posizione ";
    }

    ?>
</body>

</html>