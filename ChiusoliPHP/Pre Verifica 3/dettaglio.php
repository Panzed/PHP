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
    include_once("./inc/connessione.php");

    if ($_GET && $_GET['ID'] > 0) {
        $id = $_GET['ID'];
    }

    $query = "SELECT * FROM anagrafica WHERE ana_id = :id ";
    try {
        $st = $conn->prepare($query);
        $st->bindParam(":id", $id);
        $st->execute();
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);

        //echo "operazione eseguita!";
    } catch (PDOException $e) {
        echo "Errore nell'esecuzione della query " . $e->getMessage();
    }

    echo " <table class='table table-striped'>";



    if ($rows) {
        foreach ($rows[0] as $k => $v) {
            echo "<th>" . $k . "</th>";
        }
    }

    foreach ($rows as $row) {
        echo "<tr>";

        //per ogni elemento di $row    
        foreach ($row as $v) {
            echo "<td>" . $v . "</td>";
        }
    }



    ?>

</body>

</html>