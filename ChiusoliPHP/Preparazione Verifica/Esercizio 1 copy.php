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

    $categoria1 = ['nome' => "scarpe", 'n_prodotti' => 20, 'fatturato' => 1200];
    $categoria2 = ['nome' => "maglioni", 'n_prodotti' => 12, 'fatturato' => 800];
    $categoria3 = ['nome' => "pantaloni", 'n_prodotti' => 5, 'fatturato' => 650];
    $categorie = [$categoria1, $categoria2, $categoria3];

    $tot_prodotti = 0;
    $max_fatturato = $min_fatturato = $categorie[0]['fatturato'];
    $nome_max = $nome_min = $categorie[0]['nome'];


    foreach ($categorie as $key => $categoria) {

        $colore = "pink";
        $tot_prodotti += $categoria['n_prodotti'];
        $categorie[$key]['anno'] = date("Y");

        if ($key % 2 == 0) {
            $colore = "yellow";
        }

        if ($categoria['fatturato'] > $max_fatturato) {
            $max_fatturato = $categoria['fatturato'];
            $nome_max = $categoria['nome'];
        }

        if ($categoria['fatturato'] < $min_fatturato){
            $min_fatturato = $categoria['fatturato'];
            $nome_min = $categoria['nome'];
        }
        echo "<span style='background-color: $colore'>" . $categoria['nome'] . "</span><br>";
    }

    echo "Il numero totale di prodotti è di $tot_prodotti <br><br>";
    echo "Il fatturato massimo è di $max_fatturato che appartiene alla sezione $nome_max <br>";
    echo "Il fatturato minimo è di $min_fatturato che apparteiene alla sezione $nome_min <br>";
    echo "Il loro valore medio è di " . ($max_fatturato + $min_fatturato) / 2 . "<br><br>";


$fatturato_corrente = 2000;
$anno_corrente = date("Y");
$fatturati = [];

for ($i = 0; $i <10; $i++){
$anno = $anno_corrente - $i;
$fatturati[$anno] = $fatturato_corrente - (100*$i);
}

print_r($fatturati);
    ?>
</body>

</html>