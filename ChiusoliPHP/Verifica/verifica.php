<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $n_partecipanti = rand(20, 50);  //inizializzo partecipanti iniziali
    $voto_partecipanti = []; //inizializzo array vuoto per i voti
    $lode = $n_promossi = $somma_voti = 0;  //inizializzo la variabile lode e la variabile promossi
    $voto_basso = 101;  //inizializzo il voto più "basso" con il valore massimo possibile
    $n_voti_bassi = 0;  //inizializzo il numero di voti più bassi (parte ovviamente da 1)
    $voti_possibili = [];  //inizializzo array vuoto per i voti possibili



    for ($i = 0; $i < ($n_partecipanti - 2); $i++) {
        $voto_partecipanti[] = rand(1, 101);  //assegno un voto casuale a ogni partecipante senza contare i due assenti
    }


    echo "<ol>";
    foreach ($voto_partecipanti as $k => $value) {  //ciclo l'arrey dei voti per stampare i risultati richiesti

        $colore = "pink";  //inizializzo il colore di default

        if ($k % 2 == 0) {  //se l'index è pari cambio il colore
            $colore = "yellow";
        }


        if ($value >= 60 && $value < 101) {  //se il voto è maggiore o uguale a 60, value diventa in grassetto
            $somma_voti += $value;  //incremento la somma dei voti
            $n_promossi++;  //incremento il numero di promossi
            $value = "<b> $value </b>";
        } elseif ($value < 60) {  //se il voto è minore di 60, value diventa in corsivo
            $value = "<i> $value </i>";  //altrimenti diventa in corsivo
        } elseif ($value == 101) {  //se il voto è 101, value diventa grassetto e aggiunge un valore a $lode
            $lode++;
            $value = "<b> $value </b>";
        }

        if ($value == $value) {
            $voti_ripetuti++;
        }



        echo "<li> <span style='background-color:$colore'> $value </span></li>";
    }
    echo "</ol>";

    foreach ($voto_partecipanti as $k => $value) {
        if ($value < $voto_basso) {  //se il voto è minore del voto più basso, il voto più basso diventa il voto
            $voto_basso = $value;
        }
    }

    foreach ($voto_partecipanti as $k => $value) {
        if ($value == $voto_basso) {  //se il voto è minore del voto più basso, il voto più basso diventa il voto
            $n_voti_bassi++;  //incremento il numero di voti bassi
        }
    }





    echo "Ci sono $lode voti pari a 101";  //stampa il numero di lodi (101)
    echo "<br>";
    echo "Ci sono $n_promossi promossi";  //stampa il numero di promossi
    echo "<br>";
    echo "La media dei voti dei promossi è " . $somma_voti / $n_promossi;  //stampa la media dei voti dei promossi
    echo "<br>";
    echo "Il voto più basso è $voto_basso";  //stampa il voto più basso
    echo "<br>";
    echo "Ci sono $n_voti_bassi voti più bassi";  //stampa il numero di voti bassi 
    echo "<hr>";


    for ($i = 1; $i <= 101; $i++) {
        $voti_possibili[$i] = "";
    }







    print_r($voti_possibili);












    ?>

</body>

</html>