<?php
session_start();
if (! $_SESSION['loggato']) {
    //redirect a index.php
    header('Location: index.php?msg=loggati');
}
$x = $_SESSION['user_n_login'];
$y = $_SESSION['session_n_login'];
echo "Bentornato, ti ho già visto $x volte, $y in questa sessione!";



include_once("./inc/connessione.php");
//ora conosco $conn

if ($_POST) {
    $val_nome = $_POST['nome'];
    $nome = "%" . $val_nome . "%";
    $data = $_POST['data']; //'2010-01-01 00:00:00';
} else {
    $nome = $val_nome = "";
    $data = date("Y-m-d h:i:s");
}
$rows = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco dati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>


    <form action="elenco.php" method="POST">
        Nome <input type=text name="nome" value="<?php echo $val_nome ?>">

        Date <input type=date name="data" value="<?php echo $data ?>">
        <input type="submit" value="Cerca">
    </form>


    <?php

    //print_r($_POST);
    //elenco dei record estratti
    // join + delete


    $query = "SELECT 
                person.BusinessEntityID, LastName, FirstName, PhoneNumber, phonenumbertype.Name
     FROM person 
                LEFT JOIN personphone ON 
                person.BusinessEntityID = personphone.BusinessEntityID
                LEFT JOIN phonenumbertype ON 
                phonenumbertype.PhoneNumberTypeID = personphone.PhoneNumberTypeID
                WHERE 
                (FirstName LIKE :nome
                OR LastName LIKE :nome)
--                AND person.ModifiedDate <= :data

                LIMIT 100
            ";

    try {
        $st = $conn->prepare($query);
        $st->bindParam(":nome", $nome);
        $st->bindParam(":data", $data);
        $st->execute();
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore nell'estrazione dei dati " . $e->getMessage();
    }


    //print_r($rows);

    echo "Record estratti: " . count($rows) . "<br>";
    ?>
    <br>

    <table class="table table-striped">
        <?php

        if ($rows) {
            foreach ($rows[0] as $k => $v) {
                echo "<th>" . $k . "</th>";
            }
            echo "<th> Azioni </th>";
        } else {
            echo "Nessun dato corrisponde ai filtri selezionati.";
        }

        foreach ($rows as $row) {
            echo "<tr>";

            //per ogni elemento di $row    
            foreach ($row as $v) {
                echo "<td>" . $v . "</td>";
            }
            echo "<td>";
            echo "<a href='delete.php?ID={$row['BusinessEntityID']}'>";
            echo "<i class='bi bi-file-x'></i>";
            echo "</a>";
            echo "</td>";

            echo "</tr>";
        }

        ?>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>