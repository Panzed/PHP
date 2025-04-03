<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   $a = 2;  // queste 2 variabili non hanno nulla a che fare con le stesse a e b della funzione creata.
   $b = 3;

   //n! es. di fz ricorsiva.  Quello che c'è nei parametri quando creo una funzione, è solo creato per il suo scopo
   function miasomma($a, $b)  // in questo caso a e b sono parametri formali e valgono solo all'interno della funzione
   {  // parola chiave "function" permette di creare una propria funzione: scelgo il nome e metto i valori tra parentesi
      $a++;
      $c = $a + $b + date("m");  // scelgo il calcolo che la mia funzione deve fare. Ogni variabile creata ha funzionalità solo dentro la funzione
      //echo "<br>nella fz miasomma: a vale $a<br>";

      return $c;  //cosa deve darmi in ritorno quando andrò a richiamare la funzione
      //mai eseguita!!!!
      //tutto ciò che è sotto il return non viene calcolato quindi, in questo caso, non verrà mai stampato
      // sconsigliato fare echo dentro le funzioni
      //echo "funzione finita";
   }

   echo "a = $a";
   echo "<br>1° somma = " . miasomma($a, $b);
   //...

   $b = 10;
   echo "<br>2° somma = " . miasomma($a, $b);


   echo "<hr>";

   ?>
</body>

</html>