<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//COMPITI PER CASA
//1. Creare un array di 10 elementi e stamparli
$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for ($i = 0; $i < count($a); $i++) 
echo $a[$i] . "<br>";

echo "<hr>";

//3. Stampare la somma di tutti gli elementi dell'array
$somma = 0;

for ($i = 0; $i < count($a); $i++){
    $somma += $a[$i];
}

echo $somma;    

echo "<hr>";

//4. Stampare la media di tutti gli elementi dell'array
echo " La media dei valori all'interno dell'array è di " . $somma / count($a);

echo "<hr>";

//5. Trovare un elemento all'interno dell'array e stampare l'indice
$e = 5;
for ($i = 0; $i < count($a); $i++) {
    if ($a[$i] == $e) {
        echo "L'elemento $e si trova in posizione $i";
        break;
    }
}   

echo "<hr>";

//6. Trovare tutti gli elementi all'interno dell'array e stampare gli indici
for ($i = 0; $i < count($a); $i++) {
    echo "L'elemento $a[$i] si trova in posizione $i <br>";
}

echo "<hr>";

//7. Trovare tutti gli elementi all'interno dell'array e stampare il numero di volte che si ripetono


//8. Cercare il max di $a = [1,2,3,4,5] e stamparlo
//9. Cercare il min di $a = [1,2,3,4,5] e stamparlo
//10. Cercare il max di $a = [5,4,3,2,1] e stamparlo
//11. Cercare il min di $a = [5,4,3,2,1] e stamparlo



//creare un array dinamico di 10 elementi
//se pari stampa il contenuto, se dispari stampa il doppio del contenuto


$a = ["primo", "secondo", "terzo", "terzo", 4, "terzo", "terzo"];
$e = "terzo";
$trovato = false;
$n_trovati = 0;
$indici = [];

for ($i = 0; $i < count($a); $i++) {
    if ($a[$i] == $e){
        $trovato = true;
        $n_trovati++;
        $indici[] = $i;
    }
}


?>
</body>
</html>