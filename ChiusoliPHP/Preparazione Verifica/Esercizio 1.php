<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        Sono forniti gli array elencati di seguito (i valori memorizzati sono solo indicativi): <br>
        <br>$categoria1 = array(‘nome’ => “scarpe”, ‘n_prodotti’=>20,’fatturato’=>1200);
        <br>$categoria2 = array(‘nome’ => “maglioni”, ‘n_prodotti’=>12,’fatturato’=>800);
        <br>$categoria3 = array(‘nome’ => “pantaloni”, ‘n_prodotti’=>5,’fatturato’=>650);
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

    <hr>
    <?php

    $categoria1 = ['nome' => "scarpe", 'n_prodotti' => 20, 'fatturato' => 1100];
    $categoria2 = ['nome' => "maglioni", 'n_prodotti' => 12, 'fatturato' => 7900];
    $categoria3 = ['nome' => "pantaloni", 'n_prodotti' => 5, 'fatturato' => 1550];
    $categorie = [$categoria1, $categoria2, $categoria3];

    $tot = 0;
    $max_fatturato = $min_fatturato = $categorie[0]['fatturato'];
    $nome_max = $nome_min = $categorie[0]['nome'];



    foreach ($categorie as $i => $categoria) {
        $colore = "yellow";
        $tot += $categoria['n_prodotti'];
        if ($i % 2 == 0) {
            $colore = "pink";
        }
        echo "<span style='background-color: $colore'>" . $categoria['nome'] . "</span> <br>";

        if($categoria['fatturato'] >= $max_fatturato){
            $max_fatturato = $categoria['fatturato'];
            $nome_max = $categoria['nome'];
        }

        if($categoria['fatturato'] < $min_fatturato){
            $min_fatturato = $categoria['fatturato'];
            $nome_min = $categoria['nome'];
        }
        $categorie[$i]['anno'] = date("Y");

    }


    echo "Il numero totale di prodotti è di $tot <br>";
    echo "Il fatturato più alto è di $max_fatturato della categoria $nome_max e il minimo di $min_fatturato della categoria $nome_min ";

    print_r($categorie);
    ?>
</body>

</html>