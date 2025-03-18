<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        $pazienti=[ <br>
        ​ ​[‘cognome’ => “Muti”, ‘nome’=>”Dario”,’prima_visita’=>”1999-11-22”, ’ultima_visita’=>”2024-01-13”], <br>
        ​​[‘cognome’ => “Sordi”, ‘nome’=>”Sara”,’prima_visita’=>”2001-03-18”, ’ultima_visita’=>”2025-01-05”], <br>
        ​​[‘cognome’ => “Fermi”, ‘nome’=>”Aldo”,’prima_visita’=>”2008-10-30”, ’ultima_visita’=>”2024-07-29”] <br>
        ];
        <hr>
        si chiede di svolgere le seguenti attività:
    <ul>
        <li>elencare in una tabella nome e cognome dei pazienti (in colonne separate);</li>
        <li>scrivere in grassetto il paziente attivo da meno tempo, cioè con la data di prima visita più recente</li>
        <li>quanti sono i pazienti con ultima visita precedente a 1 anno dalla data di oggi? Quali sono? <b>XXX</b> </li>
        <li>creare un nuovo array con l’elenco delle date di ultima visita di tutti i pazienti e calcolare quante visite sono state effettuate nello scorso anno.</li>
    </ul>
    </p>


    <?php

    $pazienti = [
        ['cognome' => "Muti", 'nome' => "Dario", 'prima_visita' => "1999-11-22", 'ultima_visita' => "2024-01-13"],
        ['cognome' => "Sordi", 'nome' => "Sara", 'prima_visita' => "2001-03-18", 'ultima_visita' => "2025-01-05"],
        ['cognome' => "Fermi", 'nome' => "Aldo", 'prima_visita' => "2008-10-30", 'ultima_visita' => "2024-07-29"],
    ];

    $meno_attivo = $pazienti[0]['prima_visita'];
    $index = 0;

    foreach ($pazienti as $key => $paziente) {
        if ($paziente['prima_visita'] > $meno_attivo) {
            $meno_attivo = $paziente['prima_visita'];
            $index = $key;
        }
    }


        echo "<table border=1> <tr> <th> NOME </th> <th> COGNOME </th>";
foreach ($pazienti as $key => $paziente){

    if ($index == $key){
            $paziente['nome'] = "<b>" . $paziente['nome'] . "</b>";
            $paziente['cognome'] = "<b>" . $paziente['cognome'] . "</b>";
    }
    echo "<tr> <td>" .  $paziente['nome'] . "</td> <td>" . $paziente['cognome'] . "</td> </tr>";
}
echo "</table>";




    ?>
</body>

</html>