<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include "../../inc/lista-funzioni.php";

    $post1 = ['titolo' => "sport", 'visualizzazioni' => "10", 'pubblicazione' => '2025-01-22'];
    $post2 = ['titolo' => "Alimentazione", 'visualizzazioni' => "20", 'pubblicazione' => '2024-10-15'];
    $post3 = ['titolo' => "canzoni", 'visualizzazioni' => "15", 'pubblicazione' => '2023-05-13'];
    $posts = [$post1, $post2, $post3];

    // riepilogare i dati inseriti nel form. Verificare che il numero del
    // mese sia compreso tra 1 e 12: in caso negativo visualizzare un link alla prima pagina.

    foreach ($_REQUEST as $key => $value) {
        if ($value <= 0 || $value > 12) {
            echo "<a href='#'> Torna alla home </a>";
        } else {
            echo $key . "=>" . $value;
        }
    }

    echo "<hr>";

    // Definire una funzione che restituisce il mese di una data fornita in input

    function trovaMese($data)
    {
        $array = explode("/", $data);
        $mese = $array[1];
        return $mese;
    }


echo trovaMese("12/04/2021");




    ?>
</body>

</html>