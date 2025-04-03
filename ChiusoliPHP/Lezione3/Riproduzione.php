<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<h3> Dato il prezzo di un prodotto \$p al netto dell'iva di 100€, calcolare l'iva del 22% e stampare il prezzo compreso di iva </h3>";
    //$p il prezzo di un prodotto
    //visualizzare il prezzo ivato (cioè + il 22%)

    $p = 100;
    $iva = $p * 22 / 100;
    echo "l'iva è di $iva € <br>";
    echo "Il prezzo del prodotto \$p compreso di iva è di " . $p + $iva . " euro <br>";

    echo "<hr>";

    echo "<h3> Calcola i giorni mancanti alla fine del mese in modo dinamico </h3>";
    // Quanti giorni mancano alla fine del mese corrente

    $g = date("j");
    $m = date("n");

    switch ($m) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $gm = 31;
            break;
        case 2:
            $gm = 28;
            break;
        default:
            $gm = 30;
            break;
    }

    echo "Mancano " . $gm - $g . " giorni alla fine del mese";

    echo "<hr>";

    echo "<h3>Dati \$a = 10 e \$b = 20, calcolare la media tra i 2 numeri e stampare il risultato</h3>";
    //Dati $a e $b, calcolare la media tra i 2 numeri e stampare il risultato

    $a = 10;
    $b = 20;

    $media = ($a + $b) / 2;

    echo "La meedia tra \$a e \$b è di $media";

    echo "<hr>";


    ?>
</body>

</html>