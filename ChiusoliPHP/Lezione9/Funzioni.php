<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funzioni</title>
</head>

<body>
    <?php
    include("./lista-funzioni.php");
    //require_once("lista-funzioni.php");


    
    //convertire la data da formato db o raw a utente
    $data = "2020-01-31";
    echo "data = " . raw2user($data);

    echo "<hr>";

    //usare la fz numeroPari per verificare se $numero è pari
    $numero = 1;
    // if ( numeroPari($numero) ) echo "$numero pari ";
    // else echo "$numero dispari ";
    echo "$numero " . (numeroPari($numero) ? "pari" : "dispari");



    $a = [1, 2, 3, 6, 1, 9, 10];
    $numero = 9;
    echo "<br>somma se condizione verificata): " . sommaArray($a);




 






    $a = [1, 2, 3];
    $a[] = rand(0, 100);
    //$n = count($a);
    // echo "a contiene n. " . count($a) . " elementi";
    // print_r($a);





    ?>

</body>

</html>