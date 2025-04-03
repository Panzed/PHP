<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <?php

    $p = ['prod1' => 12.50, 'prod2' => 19.99, 'prod3' => 21.00, 'prod4' => 9.95];

    // elencare in una tabella il nome prodotto (chiave) e il relativo prezzo

    $max = 0;
    $min = $p['prod1'];
    $max_Nome = $min_Nome = "";


    echo "<table class='table table-striped'>";
    foreach ($p as $key => $value) {
        echo "<tr> <td> $key </td>";
        echo "<td> $value </td>";
        // indicare qual è il prodotto più costoso e quello meno costoso
        if ($value > $max) {
            $max = $value;
            $max_Nome = $key;
        }
        if ($value < $min) {
            $min = $value;
            $min_Nome = $key;
        }

    }
    echo "</table>";

    echo "Il prodotto più costoso è il $max_Nome con un prezzo di $max e quello meno costoso è il $min_Nome con un prezzo di $min";
    echo "<br>";

    // calcolare il prezzo medio dei prodotti (definire e richiamare una funzione)


    function media($a)
    {
        $somma = 0;
        $n_Prodotti = 0;
        foreach ($a as $value){
        $somma += $value;
        $n_Prodotti++;
        }
        $media = $somma/$n_Prodotti;
        return $media;
    }
    echo "La media dei prodotti è di " . media($p);

    ?>
</body>

</html>