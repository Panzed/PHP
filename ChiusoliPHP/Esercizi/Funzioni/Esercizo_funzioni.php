

<?php

// Funzione che verifica se l'anno è bisestile

function bisestile($anno)
{
    if ($anno % 4 == 0 && $anno % 100 != 0) {
        return true;
    } else {
        return false;
    }
}


// Funzione che converte il tempo in secondi

/**
 * @param tempo è h:m:s
 * @return numero in secondi
 */

function tempoInSecondi($t)
{
    $a = explode(":", $t);


    if (!testFormatoTempoInSec($a)) {  // se il formato non è corretto allora riportami 0
        return 0;
    }

    $risultato = $a[2] + $a[1] * 60 + $a[0] * 3600;
    return "Ci sono " . $risultato . " secondi.";
}




// verificare che $tempo sia nel formato corretto
// Devono esserci 3 dati tutti >= a 0
function testFormatoTempoInSec($a)
{
    // controllo se ci sono 3 elementi
    if (count($a) != 3)
        return false;

    // controllo se sono numeri maggiori o uguali a 0
    if ($a[0] < 0 || $a[1] < 0 || $a[2] < 0) return false;

    return true;

    // altro metodo
    /*
foreach($a as $n){
if (! is_numeric($n) || $n < 0) {
return false;
}
}
    */
}

$t = "1:0:0";
echo "$t = " . tempoInSecondi($t) . "secondi";
