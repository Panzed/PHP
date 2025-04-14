<?php
function raw2user($data)
{
    //"2135-03-18"
    $anno = substr($data, 0, 4);
    $mese = substr($data, 5, 2);
    $giorno = substr($data, 8, 2);
    // $giorno = substr($data,8);
    // $giorno = substr($data,-2);
    $data_utente = "$giorno/$mese/$anno";
    //explode()
    return $data_utente;
}

function raw2userBis($data)
{
    //"2020-01-31"
    $d = explode("-", $data);
    // cosa contiene $d????
    // [0] => "2020" 
    // [1] => "01"
    // [2] => "31"
    $data_utente = $d[2] . "/" . $d[1] . "/" . $d[0];
    return $data_utente;
}
//PER CASA  
function user2raw($data) {}

function anno($data)
{
    return substr($data, 0, 4);
}


//somma gli elementi di un array se la fz numeroPari è vera
function sommaArray($a)
{
    $somma = 0;
    foreach ($a as $v) {
        if (numeroPari($v)) $somma += $v;
    }
    return $somma;
}

//funzione che restituisce un booleano se la condizione è verificata
//es. numero pari
function numeroPari($n)
{
    if ($n % 2)
        return false;
    //se sono qui la cond if era false 
    //else

    return true;

    //return ($n % 2) ? false : true;
}


