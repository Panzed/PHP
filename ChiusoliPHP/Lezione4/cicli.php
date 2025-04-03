<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezione 4</title>
</head>

<body>
    <?php

    echo "<h1>Lezione 4</h1>";
    echo "<h2> Parliamo di Cicli</h2>";

    echo "<h3>For</h3>";


    // cicla i numeri e stampali solo se pari 

    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "Ciao $i <br>";
        }
    }
    // $i = 1 è il valore iniziale da cui parte il ciclo (inizializzazione);
    //$i <= 10 è la condizione che deve essere vera per continuare il ciclo;
    //$i++ è l'incremento di $i ad ogni iterazione del ciclo 

    echo "<hr>";

    // stampa i numeri da 10 a 1
    for ($i = 10; $i >= 1; $i--) {
        echo "Ciao $i <br>";
    }
    echo "<hr>";

    // Quanti numeri pari ci sono tra 1 e 100?
    $conta = 0;
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $conta++;
        }
    }

    echo "Ci sono " . $conta  . " numeri pari tra 1 e 100";

    echo "<hr>";


    // scrivere i primi 7 multipli di 10 indicando a fianco il numero progressivo 
    $p = 1;  // partenza
    $m = 10;  // multipli
    $n = 7;  // quanti multipli

    for ($i = 1; $i <= $n; $i++)

        echo $i . ") " . $m * $i . "<br>";

    echo "<hr>";


    // stammpa i numeri pari da 50 a 100

    $tot = 100;
    $start = 50;

    for ($i = $start; $i <= $tot; $i++) {
        if ($i % 2 == 0) {
            echo "Ciao $i <br>";
        }
    }

    echo "<hr>";

    // stessa cosa al contrario

    $x = 0;

    for ($i = $tot; $i >= $start; $i--) {
        if ($i % 2 == 0) {
            echo ++$x . ") Ciao $i <br>";
        }
    }

    echo "<hr>";






    echo "<h3>While</h3>";

    // stampa i numeri da 10 a 1
    $i = 1;
    while ($i <= 10) {
        echo $i . "<br>";
        $i++;
    }
    // $i = 1 è il valore iniziale da cui parte il ciclo (inizializzazione);
    // $i <= 10 è la condizione che deve essere vera per continuare il ciclo;
    // $i++ è l'incremento di $i ad ogni iterazione del ciclo

    echo "<hr>";


    //scrivi in rosso i numeri pari da 1 a 10
    $i = 1;
    while ($i <= 10) {
        $colore = "black";
        if ($i % 2 == 0) {
            $colore = "red";
        }
        echo "<span style='color: $colore'>$i</span> <br>";

        $i++;
    }

    echo "<hr>";





    ?>
</body>

</html>