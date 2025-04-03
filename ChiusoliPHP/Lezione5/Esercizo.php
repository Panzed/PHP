<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Eseguire per un numero di volte, pari al numero di giorni già trascorsi di questo mese, usare date(“d”), le seguenti operazioni:
    // 1. valorizzare una variabile con un valore random che rappresenti la temperatura di ogni giorno del mese, compreso tra -5 e 35. Usare rand( -5, 35);
    // 2. scrivere il valore della temperatura appena assegnato e, se maggiore di 30, scriverlo di colore rosso

    // Riportare i seguenti dati statistici:
    // 3. indicare il valore minimo e medio delle temperature gestite
    // 4. calcolare la temperatura media delle temperature maggiori di 0
    // 5. indicare se ci sono stati più giorni con temperature maggiori di 0 rispetto a quelli con temperature inferiori a 0

    // 6. Ripetere tutti i punti precedenti utilizzando un array di temperature con valori random

    $d = date("d");

    for ($i = 1; $i <= $d; $i++) {
        $temperature[] = rand(-5, 35);
    }


        $somma = $somma0 = $d0 = $dm0 = 0; //inizializzamo la somma a 0

    for ($i = 1; $i <= $d; $i++) {

        $t = $temperature[($i-1)];

        if ($i == 1) {   //inizializzo il min e il max
            $min = $max = $t;
        }

        $colore = "nero";
        if ($t > 30) {
            $colore = "#f00";
        }
        echo "<span style='color:$colore'>  $t  </span>";

        //se (t è minore del min) min = t
        if ($t < $min) {
            $min = $t;
        }

        //maggiore
        if ($t > $max) {
            $max = $t;
        }

        $somma += $t;



        if ($t > 0) {
            $somma0 += $t;
            $d0++;
        } else if ($t < 0) {
            $dm0++;
        }
    }



    echo "<hr>";
    echo "Minimo: $min, massimo: $max, media: " . ($somma / $d) . " media dei maggiori di 0: " . ($somma0 / $d0);
    echo  " Maggiori di 0: $d0 e minori di 0: $dm0";
    echo ($d0 > $dm0) ? " maggiori quelli positivi" : " maggiori quelli negativi";


    ?>
</body>

</html>