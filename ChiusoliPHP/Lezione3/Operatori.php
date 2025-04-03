<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezione 3</title>
</head>

<body>
    <h1>Operatori</h1>
    <h2>Operatori aritmetici</h2>
    <?php

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
    echo $testo; // Stampa: testo n.1 testo n.2 testo n. 3


    // incremento
    $x = 1;
    $x = $x + 1; //x vale 2

    // stessa cosa di sopra
    $x += 1; // $x = $x + 1; //x vale 3
    echo "<br> <br> x = $x";  // Stampa: x = 3

    $x++; //incremento di 1 // $x = $x + 1; //x vale 4 
    echo "<br> x dopo il ++ = $x";  // Stampa: x dopo il ++ = 4

    $y = 1;
    //$y++; //incremento di 1 unità //scritto così, prima stampa, poi calcola quindi con un echo "$y++" stamperebbe 1 e poi lo salva come variabile in 2
    echo "<br> y dopo il ++ = " . (++$y); // Stampa: y dopo il ++ = 2 // scritto così, prima calcola, poi stampa quindi con un echo "++$y" stamperebbe 2 e poi lo salva come variabile in 2


    $a = 5;
    $b = 5;
    $modulo = $a % $b;  // modulo

    echo " <br> Il resto della divisione tra $a e $b è $modulo";  // Stampa: Il resto della divisione tra 4 e 2 è 0

    ?>

    <hr>

    <h2>Operatori di confronto</h2>

    <?php

    $a = 5;
    $b = 4;

    echo $a < $b;  // Stampa: niente perchè è falso
    echo ($a > $b);  // Stampa: 1 perchè è vero

    echo ($a == $b);  // Stampa: niente perchè è falso
    echo "<br>" . ($a != $b);  // Stampa: 1 perchè è vero

    ?>
    <hr>
    <h2>Operatori di sintassi (ternario)</h2>

    <?php

    // (condizione) ? istruzione vero : istruzione2 falso;
    echo ($a >= $b) ? "$a >= $b" : "$a < $b";  // se a è maggiore di b allora risultato è vero altrimenti è falso

    ?>

    <br>

    <?php

    // Ternario dentro un altro ternario
    echo ($a > $b) ? "$a è maggiore di $b" : (($a < $b) ? "$a minore di $b" : "$a è = a  $b");  // se a è maggiore di b allora risultato è vero altrimenti se a è uguale a b allora risultato è uguale altrimenti è falso

    echo "<hr>";


    // AND - &&
    $partecipanti = 22;

    $ok = (($partecipanti <= 20) && ($partecipanti >= 15))  ? "ok" : "no";  // se partecipanti è minore di 20 E maggiore di 15 allora stampa: ok.  altrimenti stampa: no
    echo $ok;  // Stampa: ok

    // OR - ||
    $merenda = "panino";
    $sana = (($merenda == "frutta") || ($merenda == "verdura") || ($merenda == "yogurt")) ? " sana" : " non sana";  // se la merenda è frutta O yogurt allora stampa: sana.  altrimenti stampa: non sana
    echo "<br> merenda sana?" . $sana;  // Stampa: non sana

    ?>

</body>

</html>