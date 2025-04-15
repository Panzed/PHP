<?php
include_once("inc/connessione.php");

//recuperare l'ID da cancellare
if ($_GET && $_GET['ID'] > 0) {
    $id = $_GET['ID'];
} else {
    //...
}

//eseguire la query
$query = "DELETE FROM person WHERE BusinessEntityID = :id ";
try {
    $st = $conn->prepare($query);
    $st->bindParam(":id", $id);
    //$st->execute();

    //echo "operazione eseguita!";
} catch (PDOException $e) {
    echo "Errore nell'esecuzione della query " . $e->getMessage();
}


//redirect elenco.php
header('Location: elenco.php?nome=Rob');
