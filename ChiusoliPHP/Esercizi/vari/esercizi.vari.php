<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "/Applications/MAMP/htdocs/PHP/inc/lista-funzioni.php";

    $corso1 = ['nome' => 'Cucina', 'inizio' => '2019-09-30', 'coordinatore' => 'Rossi', 'n_partecipanti' => 24];
    $corso2 = ['nome' => 'Programmazione', 'inizio' => '2024-10-09', 'coordinatore' => 'Rossi', 'n_partecipanti' => 12];
    $corso3 = ['nome' => 'Inglese', 'inizio' => '2026-10-30', 'coordinatore' => 'Verdi', 'n_partecipanti' => 20];
    $corsi = [$corso1, $corso2, $corso3];


    // 1. Riepilogare i dati inseriti nel form.

    foreach ($_REQUEST as $key => $value) {
        if ($key == 'inizio') {
            $value = raw2user($value);
        }
        echo "$key: $value";
        echo "<br>";
    }

    echo "<hr>";

    // 2. Creare un nuovo array con i dati inseriti nel form secondo lo schema utilizzato
    // nell’array $corso1, poi aggiungerlo all’array $corsi.

    $nuovo_corso = [];

    foreach ($_REQUEST as $key => $value) {
        if ($key == 'inizio') {
            $value = ($value);
        }
        $nuovo_corso[$key] = $value;
    }

    $corsi[] = $nuovo_corso;

    print_r($corsi);

    echo "<hr>";



    // 3. Elencare tutti i nomi dei corsi e le rispettive date di inizio
    // 4. Per i corsi che devono ancora iniziare (data maggiore di oggi) inserire un link alla
    //pagina di iscrizione “./iscrizione.php”, trasmettendo a questa pagina il nome del
    //corso.
    $oggi = date("Y-m-d");

    foreach ($corsi as $corso) {
        echo $corso['nome'] . " ";
        echo raw2user($corso['inizio']);
        if ($corso['inizio'] > $oggi) {
            echo "<a href='iscrizione.php?nome=" . $corso['nome'] . "'> ISCRIVITI QUI </a>";
        }
        echo "<br>";
    }


    // 5. Qual è il corso con il maggior numero di partecipanti? In quale anno (non data!) è
    // iniziato? In caso di parità, elencarli tutti.

    $max_partecipanti = 0;

    foreach ($corsi as $corso) {
        if ($corso['n_partecipanti'] > $max_partecipanti) {
            $max_partecipanti = $corso['n_partecipanti'];
            $nomi_max_partecipanti = $anno_max_partecipanti = [];
        }

        if ($corso['n_partecipanti'] == $max_partecipanti) {
            $nomi_max_partecipanti[] = $corso['nome'];
            $anno_max_partecipanti[] = anno($corso['inizio']);
        }
    }

    echo " i corsi con il maggior numero di partecipanti sono: ";

    foreach ($nomi_max_partecipanti as $key => $value) {
        echo $value;
        echo " con inizio nell'anno " . $anno_max_partecipanti[$key];
    }

    echo "<hr>";

    // Definire una funzione con 2 parametri d’ingresso
    //◦ un array bidimensionale simile a $corsi (i cui elementi sono array associativi)
    //◦ una stringa (che corrisponde al nome di una chiave dell’array associativo)
    //e che restituisce la somma dei valori memorizzati nella chiave di input di ogni
    // elemento.
    // es nomeFunzione($corsi,’n_partecipanti’) restituisce la somma di 24+12+...

    function somma($aa, $a)
    {
        $somma = 0;

        foreach ($aa as $prodotto) {
            $somma += $prodotto[$a];
        }
        return $somma;
    }

    echo "La somma dei partecipanti ai corsi è di " . somma($corsi, 'n_partecipanti');



    echo "<hr>";
    echo "<hr>";


    $a = [1, 2, -5, 0, 9, -1, 0, 16];

    // 1. elencare tutte gli interi presenti nell'array, scrivendo in grassetto quelli minori di 0;

    foreach ($a as $numero) {
        if ($numero < 0) {
            $numero = "<b> $numero </b>";
        }
        echo $numero;
        echo "<br>";
    }

    // 2. scrivere il massimo ed il minimo intero presente nell’array;
    // 3. calcolare il valore medio degli interi positivi;
    $max = 0;
    $min = $a[0];
    $somma = $n_positivi = 0;

    foreach ($a as $numero) {
        if ($numero > $max) {
            $max = $numero;
        }
        if ($numero < $min) {
            $min = $numero;
        }
        if ($numero > 0) {
            $somma += $numero;
            $n_positivi++;
        }
    }

    echo "Il numero max è $max e il numero min è $min <br>";
    echo "La media dei numeri positivi è " . $somma / $n_positivi . "<br>";

    // 4. calcolare quante volte è presente il numero 0
    // 5. in quali posizioni è presente il numero 0?
    $volte_0 = 0;
    $posizioni = [];

    foreach ($a as $key => $numero) {
        if ($numero == 0) {
            $volte_0++;
            $posizioni[] = $key;
        }
    }

    echo "Il numero 0 si trova $volte_0 volte nelle posizioni: ";

    foreach ($posizioni as $posizione) {
        echo $posizione . " ";
    }

    echo "<hr>";
    echo "<hr>";

    $p = ['prod1' => 12.50, 'prod2' => 19.99, 'prod3' => 21.00, 'prod4' => 9.95];

    // 1. elencare in una tabella il nome prodotto (chiave) e il relativo prezzo

    echo "<table>";
    foreach ($p as $key => $value) {
        echo "<tr> <td> $key </td> <td> $value </td>";
    }

    echo "</table>";

    // 2. indicare qual è il prodotto più costoso e quello meno costoso

    $costoso = 0;
    $economico = $p['prod1'];
    $nome_costoso = "";
    $nome_economico = "";

    foreach ($p as $key => $value){
        if ($value > $costoso){
            $costoso = $value;
            $nome_costoso = $key;
        }
        if ($value < $economico){
            $economico = $value;
            $nome_economico = $key;
        }
    }

echo "Il prodotto più costoso costa $costoso ed è $nome_costoso e quello più economico costa $economico ed è $nome_economico";
    ?>
</body>

</html>