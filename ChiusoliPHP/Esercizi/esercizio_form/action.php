<?php
include("../lista-funzioni.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>

<body>
    <?php

    //6. funzione


    // somma i volori memorizzati in $aa[$i][$chiave]

    function sommaValori($a2, $chiave)
    //$a2 per es. $corsi
    //$chiave per es. n_partecipanti
    {
        $somma = 0;
        foreach ($a2 as $a) {

            $somma += $a[$chiave];
        }
        return $somma;
    }
    // questa è la funzione che mi prova che nella funzione sopra a2 sia effettivamente un array bidimensionale con $chiave
    function verifcaArrayConFunzione($a, $chiave)
    {
        //TODO
        //la faccio dopo perchè ora mi distrae (cioè a casa)
        return true;
    }




    $corso1 = ['nome' => "Cucina", 'inizio' => "2029-09-30", 'coordinatore' => "Rossi", 'n_partecipanti' => 12];
    $corso2 = ['nome' => "Programmazione", 'inizio' => "2024-10-09", 'coordinatore' => "Rossi", 'n_partecipanti' => 2];
    $corso3 = ['nome' => "Inglese", 'inizio' => "2026-10-30", 'coordinatore' => "Verdi", 'n_partecipanti' => 20];

    //array bidimensionale i cui elementi sono array associativi
    $corsi = [$corso1, $corso2, $corso3];

    //nome del corso1
    echo $corsi[0]['nome'];
    echo "<br>";
    //data di inizio del corso2
    echo raw2user($corsi[1]['inizio']);

    echo "<hr>";
    //1.
    // echo "Nome: " . $_REQUEST['nome'];
    // echo "<br>";
    // echo "Coordinatore: " . $_REQUEST['coordinatore'];
    // echo "<br>";

    $nuovo_corso = []; //2.nuovo corso da valorizzare con i  dati  del form
    foreach ($_REQUEST as $k => $v) {

        $nuovo_corso[$k] = $v;

        if ($k == "inizio") {
            $v = raw2user($v);
        }
        echo "$k: $v";
        echo "<br>";
    }

    //2.
    $corsi[] = $nuovo_corso;
    echo "<hr>";

    //3.
    $oggi = date("Y-m-d"); //"2025-03-19";
    foreach ($corsi as $corso) {
        echo $corso['nome'] . " " . raw2user($corso['inizio']);
        if ($corso['inizio'] > $oggi)
            echo " <a href='iscrizione.php?nome=" . $corso['nome'] . "'>iscriviti</a>";
        echo "<br>";
    }
    echo "<hr>";
    //5. (in un ciclo separato solo per comodità visiva)
    $max_partecipanti = 0;
    $nome_max_partecipanti = "Nessun corso disponibile!!!!";
    $anno_max_partecipanti = 0;
    $nomi_max_partecipanti = []; //nomi dei corsi con max partecipanti
    $anni_max_partecipanti = []; //anni dei corsi con max partecipanti
    foreach ($corsi as $corso) {
        if ($corso['n_partecipanti'] > $max_partecipanti) {
            $max_partecipanti = $corso['n_partecipanti'];
            $nomi_max_partecipanti = $anni_max_partecipanti = [];
        }
        if ($corso['n_partecipanti'] == $max_partecipanti) {
            $nomi_max_partecipanti[] = $corso['nome'];
            $anni_max_partecipanti[] = anno($corso['inizio']);
        }
    }

    echo "Corsi con max partecipanti: <br>";
    foreach ($nomi_max_partecipanti as $i => $nome_max) {
        echo $nomi_max_partecipanti[$i];
        echo " con inizio nell'anno " . $anni_max_partecipanti[$i] . "<br>";
    }


    //6.
    echo "somma valori =" . sommaValori($corsi, 'n_partecipanti');

    //7.
    // $coordinatori array con tanti elementi quanti i distinti coordinatori 
    // esempio statico
    // $coordinatori['Rossi'] = ['n_corsi'=> 2, 'n_partecipanti'=>40] 
    //scegliere di gestire un nuovo array in autonomia (questo è solo un esempio)
    $coordinatori = [];
    foreach ($corsi as $corso) {
        //$corso['coordinatore'] es Rossi
        $nome_coordinatore = $corso['coordinatore'];
        if (! array_key_exists($nome_coordinatore, $coordinatori)) { //questo coordinatore NON lo avevo già gestito
            //questo coordinatore NON lo avevo già gestito
            $coordinatori[$nome_coordinatore] = ['n_corsi' => 0, 'n_partecipanti' => 0];
        }
        $coordinatori[$nome_coordinatore]['n_corsi']++;
        $coordinatori[$nome_coordinatore]['n_partecipanti'] += $corso['n_partecipanti'];
    }

    foreach ($coordinatori as $nome_coordinatore => $coordinatore) {
        echo $nome_coordinatore . " corsi: " . $coordinatore['n_corsi'];
        echo " partecipanti: " . $coordinatore['n_partecipanti'] . "<br>";
    }




    ?>
</body>

</html>