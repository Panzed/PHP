<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lezione 1 <?php echo "in php" ?> </title>
</head>

<body>

    <h1>Titolo</h1>
    <p>Ciao</p>

    <?php
    echo 'prima frase in php <br> Hello world!';  // <br> serve per andare a capo all'interno del della stringa php

    echo ' <br> Gani dice l\'informazione: "Oggi piove!" '; // aggiungendo \ si può usare il carattere speciale

    echo " <br> Gani dice l'informazione: ";   // con due righe diverse si può scrivere in modo più leggibile
    echo '"Oggi piove!"';

    echo " <br> Gani dice l'informazione: " . '"Oggi piove!"'; // concatenando le stringhe si può scrivere in modo più leggibile
    ?>

    <br>

    <div>
        <?php
        echo "Data di oggi: ";

        echo date("<b> d/m/Y h:i:s </b>"); // echo date("d/m/Y h:i:s"); // il tag html <b> sempre dentro le virgolette
        ?>
    </div>
</body>

</html>