<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array</h1>

    <?php

    //Creazione array
    $a = [10, 20, 30, 40];  // L'ordine dell'array parte sempre da 0 (quindi 10 è in posizione 0, 20 è in posizione 1, ecc.)

    $a[0] = 10; // Modifica il valore in posizione 0


    //Stampa tutti i valori dell'array
    for ($i = 0; $i <= 3; $i++) {
        echo $a[$i] . "<br>"; // Stampa il valore in posizione i
    }

    echo "<hr>";


    //Stessa cosa di sopra ma dinamica con count($a)
    echo "\$a contiene " . count($a) . " elementi <br>";

    for ($i = 0; $i < count($a); $i++) {  // count($a) restituisce il numero di elementi dell'array e non si usa 
        echo $a[$i] . "<br>";
    }

    echo "<hr>";


    //Incrementa di 1 e stampa tutti i valori dell'array
    for ($i = 0; $i <= 3; $i++) {
        $a[$i]++;  // Incrementa il valore in posizione i di 1
        echo $a[$i] . "<br>";
    }

    echo "<hr>";

    // scfivere la somma di tutti gli elementi di $a e anche la media
    $somma = 0;
    for ($i = 0; $i < count($a); $i++) {
        $somma += $a[$i];
    }
    echo "La somma degli elementi di \$a è $somma <br>";
    echo "La media degli elementi di \$a è " . $somma / (count($a));


    echo "<hr>";

    //Trovare l'elemento $e all'interno dell'array
    //Appena si trova l'elemento, si deve uscire 
    //Stampare l'indice dell'elemento
    //Verificare quanti ce ne sono e i relativi indici
    $a = ["primo", "secondo", "terzo", "terzo", 4, "terzo", "terzo"];
    $e = "terzo";
    $trovato = false;
    $n_trovati = 0;
    $indici = [];  // array vuoto degli indici trovati
    for ($i = 0; $i < count($a); $i++) {
        //$trovato = ($a[$i] == $e) ? true: false;

        if ($a[$i] == $e) {
            $ie = $i; //valore di $i in questo punto
            //$ie deve essere un array in cui aggiungere un elemento $i
            $trovato = true;
            $indici[] = $i;  //aggiunge un elemento $i all'array $indici
            $n_trovati++;
        }
    }

    //RISULTATI
    if ($trovato == true) {
        echo "$e l'ho trovato $n_trovati volte in posizione:";
        //stampa del contenuto di $indici 
        //(vedi ore 10:30 di oggi)
        for ($i = 0; $i < count($indici); $i++) {
            echo "<br> $indici[$i] ";
        }
    } else {
        echo "$e non l'ho trovato";
    }

    echo "<hr>";

    //RIPASSO

    //array
    $a = [1, 2, 3, 4];
    $a[1] = 10;  //modifica il valore in posizione 1
    $a[] = 5; //aggiunge l'elemento in fondo all'array

    // stampa tutti gli elementi dell'array
    for ($i = 0; $i < count($a); $i++) {
        echo $a[$i] . "<br>";
    }

    echo "<hr>";



    ?>
</body>

</html>