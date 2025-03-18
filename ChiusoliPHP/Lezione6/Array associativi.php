<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associativi</title>
</head>

<body>
    <?php

    $a = [0 => 1, 10 => 2, 3, 4];
    $a[] = "in fondo";


    //come cilare su un array (associativo)?
    //NON si può usare il for(){}
    foreach ($a as $k => $v) {
        echo "[$k] => " . $v . "<br>";
    }

    echo "<hr>";

    $aa = ['rudi' => 1, 'giacomo' => 2, 2, 3];
    foreach ($aa as $chiave => $valore) {

        // echo "chiave: $chiave - Valore = $valore <br>";
        echo '$aa' . "[$chiave]= $valore <br>";
    }


    // for con gli array semplici e foreach con gli array associativi
    //QUINDI usare sempre foreach


    //esempio
    $n_c = ["rudy" => 12, "giacomo" => 22, "josias" => 19, "giorgio" => "15/a"];

    echo "<table border = 1>";

    foreach ($n_c as $nome => $civico) {
        echo "<tr>";
        echo "<td> $nome </td>";
        echo "<td> $civico </td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<hr>";
    echo "<br>";

    // array associativo con i dati di 1 persona
    //formalmente le date si scrivono "anno-mese-giorno"
    //normalmente la chiave usa gli apici mentre il valore usa le virgolette
    $persona1 = [
        'nome' => "Matteo",
        'cognome' => "Pasquinoni",
        'natoil' => "2000-01-01",
        'cf' => "1345678",
        'indirizzo' => "via dei  Mille, 10"
    ];

    $persona2 = [
        'nome' => "Giovanni",
        'cognome' => "Filippucci",
        'natoil' => "1990-12-31",
        'cf' => "9876543",
        'indirizzo' => "via Italia, 2"
    ];

    $persona3 = [
        'nome' => "Andrea",
        'cognome' => "Ardini",
        'natoil' => "1980-06-21",
        'cf' => "45876545",
        'indirizzo' => "via Indipendenza, 5"
    ];

    //array bidimensionale
    // in php si userà praticamente sempre l'array bidimensionale
    $persone = [$persona1, $persona2, $persona3];


    foreach ($persone as $persona) {
        foreach ($persona as $k => $v) {
            echo "$k => $v <br>";
        }
        echo "<br>";
    }


    //stesso es. in tabella
    echo "<table border = 1>";
    echo "<thead>";
    //scorrere la prima persona $persone[0]
    foreach ($persone[0] as $label => $v) {
        echo "<th>$label</th>";
    }
    echo "</thead>";


    foreach ($persone as $indice => $persona) {
        //1 riga per ogni persona
        echo "<tr>";
        foreach ($persona as $k => $v) {
            echo "<td>$v</td>";
        }
        echo "</tr>";
    }
    echo "</table>";





    ?>
</body>

</html>