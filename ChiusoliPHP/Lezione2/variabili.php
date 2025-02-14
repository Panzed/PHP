<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $var = 1;
    $a = 1;
    echo "all'inizio var = $var";  // Stampa: all'inizio var = 1

    $var = 2  + $var;    // si possono fare calcoli matematici con le variabili
    echo "<br> Il valore di var è " . $var;  // Stampa: Il valore di var è 3  // il . serve per concatenare
    echo '<br> var = ' . $var;  // Stampa: var = 3

    echo "<br> var = " . $var - $a;  // Stampa: var = 2


    // altri calcoli
    $a = 1;
    $b = 2;
    echo "<br> <br> all'inizio a = $a e b = $b";
    //....
    $risultato = $a + $b;
    echo '<br>risultato = ' . $risultato;  // Stampa: risultato = 3



    //esercizio
    //scambiare l contenuta di $a e $b
    //se a=1 e b=2 ... deve diventare a=2 e b=1

    $a = 1;
    $b = 2;
    $c = $a;  // c = 1
    $a = $b;  // a = 2
    $b = $c;  // b = 1
    echo "<br> <br> a = $a e b = $b";  // Stampa: a = 2 e b = 1  




    //esercizio n.2
    //$p il prezzo di un prodotto
    //visualizzare il prezzo ivato (cioè + il 22%)

    $p = 100;
    $p_ivato = $p + (($p * 22) / 100); //calcolo percentuale
    echo "<br> <br> Il prezzo compreso di IVA è " . $p_ivato;

    $p = 100;     // prezzo del prodotto
    // $p + (22% di $p)
    $iva =  22 / 100 * $p;  // calcolo dell'iva conviene separarlo se devo riutilizzare questa variabile
    echo "<br> iva = $iva"; // Stampa: iva = 22
    $p_ivato = $p + $iva;  // calcolo del prezzo ivato
    echo "<br>prezzo ivato " . $p_ivato;  // Stampa: prezzo ivato 122


    echo "<hr>";

    //esercizio n.3   
    //Operatore di concatenazione .

    $testo = "testo n.1";

    $testo = $testo . " testo n.2";

    //$testo = $testo . " testo n.3";
    $testo .= " testo n. 3";  // è uguale alla riga sopra ma meno ripetitiva
    echo $testo;


    // incremento
    $x = 1;
    $x = $x + 1; //x vale 2

    //stessa operazione scritta sopra
    $x += 1; // $x = $x + 1; //x vale 3
    echo "<br> <br> x = $x";

    $x++; //incremento di 1 // $x = $x + 1; //x vale 4 
    echo "<br> x dopo il ++ = $x";

    $y = 1;
    //$y++; //incremento di 1 unità //scritto così però, prima stampa, poi calcola quindi con un echo "$y++" stamperebbe 1 e poi lo salva come variabile in 2
    echo "<br> y dopo il ++ = " . ++$y; // Stampa: y dopo il ++ = 2





    ?>
</body>

</html>