<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezione 2</title>
</head>

<body>
    <h1>variabili</h1>
    <?php
    $var = 1;
    $a = 1;
    echo "all'inizio var = $var";  // Stampa: all'inizio var = 1

    $var = 2  + $var;    // si possono fare calcoli matematici con le variabili
    echo "<br> Il valore di var è " . $var;  // Stampa: Il valore di var è 3  // il . serve per concatenare
    echo '<br> var = ' . $var;  // Stampa: var = 3

    echo "<br> var = " . $var - $a;  // Stampa: var = 2


    // altri calcoli
    $a = 1;
    $b = 2;
    echo "<br> <br> all'inizio a = $a e b = $b";
    //....
    $risultato = $a + $b;
    echo '<br>risultato = ' . $risultato;  // Stampa: risultato = 3



    //esercizio
    //scambiare l contenuta di $a e $b
    //se a=1 e b=2 ... deve diventare a=2 e b=1

    $a = 1;
    $b = 2;
    $c = $a;  // c = 1
    $a = $b;  // a = 2
    $b = $c;  // b = 1


    echo "<br> <br> a = $a e b = $b";  // Stampa: a = 2 e b = 1  





    ?>
</body>

</html>