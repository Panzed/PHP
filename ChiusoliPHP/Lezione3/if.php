<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //if else
    $a = 1;
    $b = 2;

    if ($a > $b) {
        echo "a è maggiore di b";
    } else {
        if ($a == $b)
            echo "a è uguale a b";
        else
            echo "a è minore di b";
    }


    echo "<br> b = $b";

    echo "<hr>";


    //switch
    $mese = date("n");
    echo "Oggi è il mese n. " . $mese;
    $nome_mese = "";
    switch ($mese) {
        case 1:
            $nome_mese = "Gennaio";
            break;
        case 2:
            $nome_mese = "Febbraio";
            break;
        case 3:
            $nome_mese = "Marzo";
            break;
        case 4:
            $nome_mese = "Aprile";
            break;
        case 5:
            $nome_mese = "Maggio";
            break;
        case 6:
            $nome_mese = "Giugno";
            break;
        case 7:
            $nome_mese = "Luglio";
            break;
        case 8:
            $nome_mese = "Agosto";
            break;
        case 9:
            $nome_mese = "Settembre";
            break;
        case 10:
            $nome_mese = "Ottobre";
            break;
        case 11:
            $nome_mese = "Novembre";
            break;
        case 12:
            $nome_mese = "Dicembre";
            break;
        default:
            $nome_mese = "Mese non valido";
            break;
    }

    echo "<br> Il mese corrispondente è $nome_mese";


    echo "<hr>";

    // Quanti giorni mancano alla fine del mese corrente
    $m = date("n");
    $g = date("j");
    $a = date("Y");

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
            if (($a % 4) == 0)
                $gm = $gm++;
            break;
        default:
            $gm = 30;
            break;
    }


    echo "<br> Mancano " . ($gm - $g) . " giorni alla fine del mese";




    ?>
</body>

</html>