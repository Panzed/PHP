<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include("/Applications/MAMP/htdocs/PHP/inc/lista-funzioni.php");



    $corso1 = ['nome' => "Cucina", 'inizio' => "2029-09-30", 'coordinatore' => "Rossi", 'n_partecipanti' => 12];
    $corso2 = ['nome' => "Programmazione", 'inizio' => "2024-10-09", 'coordinatore' => "Rossi", 'n_partecipanti' => 2];
    $corso3 = ['nome' => "Inglese", 'inizio' => "2026-10-30", 'coordinatore' => "Verdi", 'n_partecipanti' => 20];

    //array bidimensionale i cui elementi sono array associativi
    $corsi = [$corso1, $corso2, $corso3];



    // 1. Riepilogare tutti i dati inseriti nel forum

    echo "nome: " . $_REQUEST['nome'];
    echo "<br>";
    echo "inizio: " . raw2user($_REQUEST['inizio']);
    echo "<br>";
    echo "coordinatore: " . $_REQUEST['coordinatore'];
    echo "<br>";
    echo "Numero di partecipanti: " . $_REQUEST['n_partecipanti'];

    echo "<hr>";


    // 2. Creare un array con tutti i valori inseriti nel form ed aggiungerlo all'array già esistente $corsi

    $nuovo_corso = [];

    foreach ($_REQUEST as $key => $value) {
        $nuovo_corso[$key] = $value;

        if ($key == 'inizio') {
            $value = raw2user($value);
        }
        echo "$key: $value";
        echo "<br>";
    }

    $corsi[] = $nuovo_corso;


    echo "<hr>";


    // 3. Elencare tutti i nomi dei corsi e le rispettive date di inizio
    // 4.Per i corsi che devono ancora iniziare (data maggiore di oggi) inserire un link alla pagina di iscrizione “./iscrizione.php”, trasmettendo a questa pagina il nome del corso.

    $oggi = date('Y-m-d');

    foreach ($corsi as $corso) {
        echo $corso['nome'] . " " . raw2user($corso['inizio']);

        if ($corso['inizio'] > $oggi) {
            echo "<a href='iscrizione.php?nome=" . $corso['nome'] . "'> ISCRIVITI QUI </a>";
        }
        echo "<br>";
    }

    echo "<hr>";


    // 5. Qual è il corso con il maggior numero di partecipanti? In quale anno (non data!) è iniziato? In caso di parità, elencarli tutti.

    $max_partecipanti = 0;

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


    echo "I corsi con il numero max di partecipanti sono: <br>";

    foreach ($nomi_max_partecipanti as $i => $nome_max) {
        echo $nomi_max_partecipanti[$i];
        echo " con inizio nell'anno " . $anni_max_partecipanti[$i] . "<br>";
    }

    echo "<hr>";

    // 6. Definire una funzione con 2 parametri d’ingresso
    // ◦ un array bidimensionale simile a $corsi (i cui elementi sono array associativi)
    // ◦ una stringa (che corrisponde al nome di una chiave dell’array associativo)
    // e che restituisce la somma dei valori memorizzati nella chiave di input di ogni
    // elemento.
    // es nomeFunzione($corsi,’n_partecipanti’) restituisce la somma di 24+12+...

    function sommaValori($a2, $chiave)
    {
        $somma = 0;

        foreach ($a2 as $a) {
            $somma += $a[$chiave];
        }
        return $somma;
    }


    echo sommaValori($corsi, 'n_partecipanti');

    ?>
</body>

</html>