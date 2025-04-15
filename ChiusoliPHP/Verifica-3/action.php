<?php
include("../inc/lista-funzioni.php");
include_once("./inc/connessione.php");

// Funzione per calcolare gli anni

function anni($data)
{
    $array = explode("-", $data);
    $anno = $array[0];
    $annoOggi = date("Y");
    if ($anno == $annoOggi) {
        return true;
    } else {
        return false;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>

<body>
    <?php

    // inizializzo title
    if ($_REQUEST) {
        $title = $_REQUEST['title'];
    } else {
        $title = "null";
    }

    // Query e preparazione
    $query = "SELECT * 
              FROM person
              WHERE person.Title = :title
              LIMIT 100";
    try {
        $st = $conn->prepare($query);
        $st->bindParam(":title", $title);
        $st->execute();
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore nell'estrazione dei dati " . $e->getMessage();
    }


    // Stampa dei risultati in  tabella 

    echo "<table class='table table-striped'>";
    echo "<tr>";
    foreach ($rows[0] as $k => $v) {
        echo "<th>" . $k . "</th>";
    }
    echo "<th> Azioni </th>";
    echo "</tr>";

    foreach ($rows as $row) {
        echo "<tr>";

        //per ogni elemento di $row    
        foreach ($row as $k => $v) {
            if ($k == "ModifiedDate") {
                $v = raw2user($v);
            }
            echo "<td>" . $v . "</td>";
        }
        if (anni($row['ModifiedDate']) != true) {
            echo "<td> <a href='dettagli.php?ID=" . $row['BusinessEntityID'] . "'> Dettagli </a> </td> ";
        } else {
            echo "<br>";
        }
        echo "</tr>";
    }

    echo "</table>";


    ?>
</body>

</html>