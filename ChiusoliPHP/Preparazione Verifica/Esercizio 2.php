<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        Viene fornito un array di interi, dove ogni numero rappresenta l'età degli abitanti di un piccolo
        comune. Si chiede di svolgere le seguenti attività:
        <br>1. elencare tutte le età presenti nell'array con uno sfondo alternato nelle varie righe,
        scrivendo in grassetto le età dei maggiorenni e in corsivo quelle dei minorenni (0
        corrisponde ad un neonato);
        <br>2. in un riquadro, riportare il numero dei neonati e l'età del più anziano;
        <br>3. calcolare e visualizzare l'età media dei maggiorenni.
        <br>4. Per aver diritto al voto si deve avere almeno 18 anni: calcolare e visualizzare quante
        schede servono in totale per le elezioni.
    </p>

    <?php

    $eta = [];
    $somma = 0;
    $maggiorenni = 0;
    $schede = 0;
    $neonati = 0;

    for ($i = 0; $i < 10; $i++) {
        $eta[] = rand(0, 100);
    }


    foreach ($eta as $k => $v) {
        $colore = "yellow";
        if ($k % 2 == 0) {
            $colore = "pink";
        }

        if ($v >= 18) {
            $somma += $v;
            $v = "<b> $v </b>";
            $maggiorenni++;
            $schede++;
        } elseif ($v == 0) {
            $neonati++;
        } elseif ($v < 18) {
            $v = "<i> $v </i>";
        }

        echo "<span style=background-color:$colore>" . $v . "</span> <br>";
    }

    echo "L'età media dei maggiorenni nella lista è di " . $somma / $maggiorenni . "<br>";
    echo "Serviranno $schede per le elezioni <br>";
    echo "Il più vecchio ha " . max($eta) . " anni <br>";
    echo " e $neonati neonati <br>";

    echo "<hr>";


    echo "<table border=1>";
    echo "<tr>";
    echo "<th></th>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<th> $i </th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr> <th> $i </th>";
        for ($y = 1; $y <= 10; $y++) {
            echo "<td>" . $i * $y . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>


</body>

</html>