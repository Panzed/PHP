<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        Viene fornito un array di interi, dove ogni numero rappresenta l&#39;età degli abitanti di un piccolo
        comune. Si chiede di svolgere le seguenti attività:
        <br>1. elencare tutte le età presenti nell&#39;array con uno sfondo alternato nelle varie righe,
        scrivendo in grassetto le età dei maggiorenni e in corsivo quelle dei minorenni (0
        corrisponde ad un neonato);
        <br>2. in un riquadro, riportare il numero dei neonati e l&#39;età del più anziano;
        <br>3. calcolare e visualizzare l&#39;età media dei maggiorenni.
        <br>4. Per aver diritto al voto si deve avere almeno 18 anni: calcolare e visualizzare quante
        schede servono in totale per le elezioni.
    </p>

    <br>
    <hr>
    <p>
        Sono forniti gli array elencati di seguito (i valori memorizzati sono solo indicativi): <br>
        <br>$categoria1 = array(‘nome’ =&gt; “scarpe”, ‘n_prodotti’=&gt;20,’fatturato’=&gt;1200);
        <br>$categoria2 = array(‘nome’ =&gt; “maglioni”, ‘n_prodotti’=&gt;12,’fatturato’=&gt;800);
        <br>$categoria3 = array(‘nome’ =&gt; “pantaloni”, ‘n_prodotti’=&gt;5,’fatturato’=&gt;650);
        <br>$categorie = [$categoria1, $categoria2, $categoria3]; <br>
        <br>Si chiede di svolgere le seguenti attività:
        <br>1. elencare tutti i nomi delle categorie con uno sfondo alternato nelle varie righe;
        <br>2. calcolare il numero totale di prodotti;
        <br>3. qual è la categoria con il fatturato più alto? e quella con il più basso? Indicare
        anche il relativo valore di fatturato (più alto e più basso) e il valore medio;
        <br>4. aggiungere in fondo ad ogni array delle categorie un ulteriore elemento, con
        chiave &#39;anno&#39; e valore l’anno corrente;
        <br>5. sapendo che l’azienda è attiva da 10 anni, creare un ulteriore array con un
        elemento per ogni anno di attività; ogni elemento deve avere come chiave l’anno
        di competenza e come valore il fatturato di quell’anno. Si consideri che il
        fatturato di ogni anno sia cresciuto di 100€ rispetto all’anno precedente fino ad
        arrivare al valore dell’anno corrente (es. se quest’anno il fatturato fosse di
        2.000€ allora quello dell’anno scorso sarebbe di 1.900€, quello dell’anno prima
        1.800€ e così via).
    </p>


    <h3>Esercizio 2</h3>

    <?php

    $categoria1 = ['nome' => "scarpe", 'n_prodotti' => 20, 'fatturato' => 1200];
    $categoria2 = ['nome' => "maglioni", 'n_prodotti' => 12, 'fatturato' => 800];
    $categoria3 = ['nome' => "pantaloni", 'n_prodotti' => 5, 'fatturato' => 650];
    $categorie = [$categoria1, $categoria2, $categoria3];

    $somma = 0;
    $max_fatturato = $categorie[0]['fatturato'];  //modo dinamico
    $min_fatturato = 0;  //modo più statico


    foreach ($categorie as $i => $categoria) {
        $colore = "#fff";
        if ($i % 2) {
            $colore = "#ccc";
        }
        echo "<p style='background-color:$colore'>" . $categoria['nome'] . "</p>";

        $somma += $categoria['n_prodotti'];


        if ($categoria['fatturato'] >= $max_fatturato) {
            $max_fatturato = $categoria['fatturato'];
            $max_fatturato_nome = $categoria['nome'];
        } elseif ($categoria['fatturato'] < $max_fatturato) {
            $min_fatturato = $categoria['fatturato'];
            $min_fatturato_nome = $categoria['nome'];
        }

            $categorie[$i]['anno'] = 2025;
    }



    echo "<hr>";

    echo "Il numero totale dei prodotti sono  $somma <br>";

    echo "Il fatturato massimo è di $max_fatturato della categoria " . $max_fatturato_nome . "<br>";
    echo "Il fatturato minimo è di $min_fatturato della categoria " . $min_fatturato_nome . "<br>";

    print_r($categorie);




    ?>
</body>

</html>