<?php
include("/Applications/MAMP/htdocs/PHP/inc/lista-funzioni.php");


//5 funzione
// media_in_array($prodotti,'prezzo')
function media_in_array($array, $chiave)
{
    //controlli sui parametri!!!
    $somma = $n = 0;
    foreach ($array as $aa) { //$aa -> $prodotto
        //controllare se la chiave $chiave esiste!! array_key_exists
        if (! array_key_exists($chiave, $aa)) {
            //break; //istr succ quella fuori da ciclo foreach    
            continue; //passa all'iterazione successiva in tutti i cicli
        }
        //se sono qui la chiave esiste sicuramente
        $somma += $aa[$chiave];
        $n++;
    }
    return ($somma / $n);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prodotti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    $prodotti = [
        ['nome' => "prod1", 'prezzo' => 30, 'qta' => 5, 'ultimo_acquisto' => '2023-03-14'],
        ['nome' => "prod2", 'prezzo' => 10, 'qta' => 7, 'ultimo_acquisto' => '2023-03-14'],
        ['nome' => "prod3", 'prezzo' => 20, 'qta' => 0, 'ultimo_acquisto' => '2025-02-28']
    ];


    //1. tabella con i prodotti
    echo "<table class=\"table table-striped\">";



    foreach ($prodotti as $i => $prodotto) {
        //etichette prese da $prodotti[0]    
        if ($i == 0) {
            echo "<tr>";
            foreach ($prodotto as $chiave => $valore) {
                echo "<th>$chiave</th>";
            }
            echo "</tr>";
        }


        echo "<tr>";
        foreach ($prodotto as $chiave => $valore) {
            if ($chiave == 'ultimo_acquisto') {
                $valore = raw2user($valore);
            }
            echo "<td>$valore</td>";
        }

        echo "</tr>";
    }


    echo "</table>";



    //recupero dati del form
    //print_r($_REQUEST);
    $min_qta = $_REQUEST['qta'];
    //2 elencari i prodotti con qta < di quella inserita nel form
    foreach ($prodotti as $prodotto) {
        if ($prodotto['qta'] <= $min_qta) {
            //scrivo il nome prodotto
            echo $prodotto['nome'] . "<br>";
        }
    }

    echo "<hr>";


    // 4
    $data_min = $prodotti[0]['ultimo_acquisto'];
    $nomi_min = [];

    foreach ($prodotti as $prodotto) {

        if ($prodotto['ultimo_acquisto'] <= $data_min) {
        
            if ($prodotto['ultimo_acquisto'] < $data_min){

                $nomi_min = [];
            }

            $data_min = $prodotto['ultimo_acquisto'];
            $nomi_min[] = $prodotto['nome'];

        }



    }

    print_r($nomi_min);
    echo "<hr>";



    //6 e 7 funzione
    $pm = media_in_array($prodotti, 'prezzo');
    echo "media dei prezzi= " . $pm;
    echo "<br>media delle qta = " . media_in_array($prodotti, 'qta');

    //8 nuovo prodotto
    $max = 10;
    $prodotti[] =
        [
            'nome' => "prod4",
            'prezzo' => $pm, //prezzo medio,
            'qta' => rand(0, $max), //random tra 0 e il max delle qta
            'ultimo_acquisto' => date("Y-m-d") //oggi
        ];

    echo "<hr>";

    //9 
    //data di ultimo acquisto del prod2 la mettiamo a ieri e la qta a 20;

    foreach ($prodotti as $chiave => $prodotto) {
        if ($prodotto['nome'] == "prod2") {
            $prodotti[$chiave]['qta'] = 20;
            $prodotti[$chiave]['ultimo_acquisto'] = date("d/m/Y", mktime(0, 0, 0, date("m"), date("d") - 1, date("Y")));
        }
    }
    print_r($prodotti);



    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>