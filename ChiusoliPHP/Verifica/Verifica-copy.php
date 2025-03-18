<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $n_partecipanti = rand(20, 50);
    $voti = [];

    for ($i = 1; $i <= 101; $i++) {
        $a[$i] = 0;
    }

    for ($i = 1; $i <= ($n_partecipanti - 2); $i++) {
        $voti[] = rand(1, 101);
    }

    $lode = 0;
    $promossi = $somma = 0;
    $voto_min = 110;
    $n_voto_min = 0;

    echo "<ol>";

    foreach ($voti as $i => $voto) {
        $colore = "pink";

        if ($i % 2 == 0) {
            $colore = "yellow";
        }

        if ($voto == 101) {
            $lode++;
        }

        if ($voto < $voto_min) {
            $voto_min = $voto;
            $n_voto_min = 0;
        }

        if ($voto == $voto_min) {
            $n_voto_min++;
        }


        $a[$voto] = $a[$voto] + 1;

        if ($voto >= 60) {
            $promossi++;
            $somma += $voto;
            $voto = "<b> $voto </b>";
        } else {
            $voto = "<i> $voto </i>";
        }
        echo "<li><span style='background-color: $colore'> $voto </span></li>";
    }
    echo "</ol>";

    echo "Sono state assegnate n. $lode lodi. <br>";
    echo "La media tra i voti dei promossi è di " . $somma / $promossi . "<br>";
    echo "Il voto minimo è $voto_min e si ripete n. $n_voto_min volte <br>";


    echo "<table>";
    foreach ($a as $k => $v) {
        echo "<tr>";
        echo "<td>$k => $v</td>";
        echo "</tr>";
    }
    echo "</table>";

    print_r($a);
    ?>

</body>

</html>