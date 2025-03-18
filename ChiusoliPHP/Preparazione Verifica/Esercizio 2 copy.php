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
    $neonati = $maggiorenni = $somma = 0;

    for ($i = 0; $i < 10; $i++) {
        $eta[] = rand(0, 100);
    }

    foreach ($eta as $i => $value) {
        $colore = "yellow";
        if ($i % 2 == 0) {
            $colore = "pink";
        }
        if ($value >= 18) {
            $somma += $value;
            $maggiorenni++;
            $value = "<b> $value </b>";
        } elseif ($value > 0 && $value <18 ) {
            $value = "<i> $value </i>";
        }elseif ($value == 0){
            $neonati++;
            $value = "<i> $value </i>";
        }
            echo "<span style='background-color: $colore'>" . $value . "</span> <br>";
    }


echo "Il più anziano ha " . max($eta) . " anni e ci sono $neonati neonati <br>";
echo "L'età media dei maggiorenni è " . $somma/$maggiorenni . "<br>";
echo "Serviranno $maggiorenni Schede elettorali";

    print_r($eta);

    ?>


</body>

</html>