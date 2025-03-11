<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php

   $a = 4;  // queste 2 variabili non hanno nulla a che fare con le stesse a e b della funzione creata.
   $b = 5;

   //Quello che c'è nei parametri quando creo una funzione, è solo creato per il suo scopo
   function mia_somma($a, $b)
   {  // parola chiave "function" permette di creare una propria funzione: scelgo il nome e metto i valori tra parentesi
      $c = $a + $b;  // scelgo il calcolo che la mia funzione deve fare. Ogni variabile creata ha funzionalità solo dentro la funzione
      return $c;   //cosa deve darmi in ritorno quando andrò a richiamare la funzione
      echo "fine funzione"; //tutto ciò che è sotto il return non viene calcolato quindi, in questo caso, non verrà mai stampato
      // sconsigliato fare echo dentro le funzioni
   }



   $s = mia_somma($a, $b);
   echo "La somma è uguale a $s";


   echo "<hr>";



   ?>
</body>

</html>