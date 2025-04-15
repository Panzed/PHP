<?php
include("../inc/lista-funzioni.php");
include_once("./inc/connessione.php");
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

    if ($_GET && $_GET['ID'] > 0) {
        $id = $_GET['ID'];
    }

    $query = "SELECT * 
            FROM person
            WHERE BusinessEntityID = :id ";
    try {
        $st = $conn->prepare($query);
        $st->bindParam(":id", $id);
        $st->execute();
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore nell'estrazione dei dati " . $e->getMessage();
    }

    // Stampo il risultato in tabella
    if ($rows) {
        echo "<table class='table table-striped'>";
        echo "<tr>";
        foreach ($rows[0] as $k => $v) {
            echo "<th>" . $k . "</th>";
        }
        echo "</tr>";
        foreach ($rows as $row) {
            echo "<tr>";

            foreach ($row as $v) {
                echo "<td>" . $v . "</td>";
            }
            echo "</tr>";
        }
    }
    echo "</table>";

    ?>
</body>

</html>