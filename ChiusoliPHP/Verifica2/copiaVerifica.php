<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "../inc/lista-funzioni.php";

    $post1 = ['titolo' => "sport", 'visualizzazioni' => "10", 'pubblicazione' => '2025-01-22'];
    $post2 = ['titolo' => "Alimentazione", 'visualizzazioni' => "20", 'pubblicazione' => '2024-10-15'];
    $post3 = ['titolo' => "canzoni", 'visualizzazioni' => "15", 'pubblicazione' => '2023-05-13'];
    $posts = [$post1, $post2, $post3];

    // riepilogare i dati inseriti nel form. Verificare che il numero del
    // mese sia compreso tra 1 e 12: in caso negativo visualizzare un link alla prima pagina.

    foreach ($_REQUEST as $key => $value) {
        if ($value <= 0 || $value > 12) {
            echo "<a href='index.html'> Formato non valido </a>";
        } else {
            echo $key . " => " . $value;
        }
    }

    echo "<hr>";

    // Definire una funzione che restituisce il mese di una data fornita in input

    function trovaMese($data)
    {
        $data = raw2user($data);
        $array = explode("/", $data);
        $mese = $array[1];
        return $mese;
    }

    // Provo la funzione

    $data = '2024-10-15';

    echo "Il mese della data di imput $data è: " . trovaMese($data);

    echo "<hr>";

    // Definire una funzione che calcola la media delle visualizzazioni tra tutti i post pubblicati

    function calcolaMedia($posts)
    {
        $somma = $nPost = 0;
        foreach ($posts as $post) {
            $somma += $post['visualizzazioni'];
            $nPost++;
        }
        $media = $somma / $nPost;
        return $media;
    }

    // Provo la funzione 

    echo "La media delle visualizzazioni dei posts è di: " . calcolaMedia($posts);

    echo "<hr>";


    // Elencare i titoli e le date di pubblicazione dei post (memorizzati in $posts) pubblicati nel blog
    // nel mese richiesto dal form e scrivere se le visualizzazioni sono sopra o sotto la media (o
    // uguali).

    foreach ($posts as $post) {
        if ($_REQUEST['mese'] == trovaMese($post['pubblicazione'])) {
            echo $post['titolo'];
            echo " " . raw2user($post['pubblicazione']);
            if ($post['visualizzazioni'] > calcolaMedia($posts)) {
                echo " <b>VISUALIZZAZIONI SOPRA LA MEDIA :) </b> <br>";
            } elseif ($post['visualizzazioni'] < calcolaMedia($posts)) {
                echo " <i>Visualizzazioni sotto la media :( </i> <br>";
            } else {
                echo " Visualizzazioni nella media :| <br>";
            }
            $post['visualizzazioni']++;
        }
    }

    echo "<hr>";

    // Vicino ad ogni titolo, inserire il link alla pagina ./post.php, trasmettendo l’indice della posizione
    // del post nell’array $posts

    foreach ($posts as $i => $post) {
        echo $post['titolo'];
        echo "<a href='./post.php?post=" . $i . "'> Clicca qui </a>";
        echo "<br>";
    }



    ?>
</body>

</html>