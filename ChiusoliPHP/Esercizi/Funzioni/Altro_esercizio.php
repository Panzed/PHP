<?php

// Verificare se è un numero primo

/**
 * @param int $n
 * @return boolean  // vero mi restituisce 1
 */

function numeroPrimo($n)
{
    if ($n == 1) {  // 1 non è un numero primo
        return false;
    }

    for ($i = 2; $i < $n; $i++) {  // ciclo for che parte da 2 e arriva fino al numero
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}


$n = 3;
echo " $n è un numero primo? " . numeroPrimo($n);

//FINITO!

echo "<hr>";



// Fattoriale! Calcola il fattoriale di un numero n

// esempio di fattoriale: 3! = 3 * 2 * 1
/**
 * @param int
 * @return int
 */

function fattoriale($n)
{

    if ($n == 0 || $n == 1) {
        return 1;
    }

    $fattoriale = 1;  // inizializzo la variabile fattoriale a 1

    for ($i = 1; $i <= $n; $i++) {  // ciclo for che parte da 1 e arriva fino al numero
        $fattoriale = $fattoriale * $i;  // moltiplico il fattoriale per i
    }
    return $fattoriale;
}


$n = 3;
echo "Il fattoriale di $n è: " . fattoriale($n) . "<br>";



// Funzione ricorsiva per il fattoriale, vado a richiamare la stessa funzione più volte all'interno di un calcolo
// Stesso esercizio di sopra ma con una funzione ricorsiva
function fattorialeRicorsivo($n)
{
    if ($n == 0 || $n == 1) {  // vincolo importante nelle funzioni ricorsive. Devi dare un limite e una fine
        return 1;
    }
    return $n * fattorialeRicorsivo($n - 1);
}

echo "Il fattoriale ricorsivo di $n è: " . fattorialeRicorsivo($n) . "<br>";
