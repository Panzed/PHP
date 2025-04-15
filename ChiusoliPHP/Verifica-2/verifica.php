<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "../../inc/lista-funzioni.php";

    $post1 = ['titolo' => "sport", 'visualizzazioni' => "10", 'pubblicazione' => '2025-01-22'];
    $post2 = ['titolo' => "Alimentazione", 'visualizzazioni' => "20", 'pubblicazione' => '2024-10-15'];
    $post3 = ['titolo' => "canzoni", 'visualizzazioni' => "15", 'pubblicazione' => '2023-05-13'];
    $posts = [$post1, $post2, $post3];

    // Creare la seconda pagina in cui riepilogare i dati del form. 
    // Verifica che il numero del mese sia compreso tra 1 e 12. In caso negativo crea un link che riporta alla pagine del form

    foreach ($_REQUEST as $key => $value) {
        if ($_REQUEST['mese'] > 12 || $_REQUEST['mese'] <= 0) {
            echo "<a href='http://localhost/php/ChiusoliPHP/Verifica2/'> Mese inserito non calcolabile. Torna al Form </a>";  // creo link in caso il numero sia <=0 o >12
        }
        echo $value; // in caso il numero è accettato dalle condizioni, stampa il suo valore
    }

    echo "<hr>";

    // Definire una funzione che restituisce il mese di una data entrante

    /**
     * @param date $data
     * @return int  // il numero del mese di $data
     */

    function trova_mese($date)
    {
        return substr($date, 5, 2);
    }

    // Proviamo se la funzione funziona chiamando una data a caso

    $date = "2023/11/13";
    echo trova_mese($date);

    echo "<hr>";


    // Definire una funzione che calcola la media delle visualizzazioni tra tutti i posto pubblicati

    /**
     * @param array $aa
     * @return int  // la media delle visualizzazioni dei posts
     */

    function media_v($aa)
    {

        $somma = $n_post = 0;

        foreach ($aa as $p) {
            $somma += $p['visualizzazioni'];
            $n_post++;
        }

        $media = $somma / $n_post;

        return $media;
    }

    // provo la seconda funzione chiamando $posts cme esempio

    echo media_v($posts);

    echo "<hr>";


    // elencare i titoli e le date di pubblicazione post pubblicati nel blog nel mese richiesto dal form e scrivere se le visualizzazioni sono sopra o sotto la media (o uguali)

    $nomi = []; // inizializzo i nomi dei corsi con un array vuoto
    $date = []; // inizializzo le date dei corsi con un array vuoto

    foreach ($posts as $key => $post) {
        if (trova_mese($post['pubblicazione']) == $_REQUEST['mese']) {
            $nomi[] = $post['titolo'];
            $date[] = raw2user($post['pubblicazione']);
            $posts[$key]['visualizzazioni']++;
        }
    }



    echo "I post pubblicati nel mese inserito come dato nel form sono: <br>";

    foreach ($nomi as $key => $value) {
        echo $value . " ";
        echo "<br>";
    }

    echo " pubblicati nelle rispettive date: <br>";
    foreach ($date as $data) {
        echo $data . "<br>";
    }

    echo " e le visualizzazioni sono rispettivamente: ";


    echo "<hr>";



    // Vicino ad ogni titolo inserire il link alla pagina ./post.php trasmettendo l'indice della posizione del post nell'array $posts

    foreach ($posts as $i => $post) {
        echo $post['titolo'];
        echo "<a href='post.php?post=" . $i . "'> Clicca qui </a>";

        echo "<br>";
    }


    // Incrementa di  il numero di visualizzazioni dei post elencati al punto 5
    // (fatto nel punto 5)









    ?>
</body>

</html>