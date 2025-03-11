<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    $tot_studenti = rand(20, 50);
    $voto_partecipanti = [];
    $lode = $promossi = $somma = 0;
    $min_voto = 101;



    for ($i = 0; $i < ($tot_studenti - 2); $i++) {
        $voto_partecipanti[] = rand(1, 101);
    }

    for ($i = 1; $i <= 101; $i++) {
        $a[$i] = 0;
    }

    echo "<ol>";
    foreach ($voto_partecipanti as $key => $value) {

        if ($key % 2 == 0) {
            $colore = 'yellow';
        } else {
            $colore = 'pink';
        }

        $volte_voto = $a[$value];
        $a[$value] = ++$volte_voto;

        if ($value < $min_voto) {
            $min_voto = $value;
            $n_min_voto = 0;
        }

        if ($value == $min_voto) {
            $n_min_voto++;
        }

        if ($value == 101) {
            $lode++;
        }

        if ($value >= 60) {
            $promossi++;
            $somma += $value;
            $value = "<b> $value </b>";
        } else {
            $value = "<i> $value </i>";
        }





        echo "<li><span style='background-color: $colore'> $value </span></li>";
    }
    echo "</ol>";


    echo "Sono state assegnate n. $lode lodi <br>";
    echo "Il voto medio dei promossi è di " . $somma / $promossi . "<br>";
    echo "Il voto più basso è stato di $min_voto ed è uscito n. $n_min_voto volte";


    echo "<hr>";


    echo "<table>";
    foreach ($a as $key => $value) {
        echo "<tr><td> $key => $value </td></tr>";
    }
    echo "</table>";



    ?>





</body>

</html>