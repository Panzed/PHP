<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include ("../inc/lista-funzioni.php");
    include_once("./inc/connessione.php");

echo "Ciao " . $_REQUEST['nome'] . "<br> " . raw2user($_REQUEST['data']);

echo "<hr>";

    if ($_REQUEST) {
        $data = $_REQUEST['data'];
    }

$query = "SELECT *
FROM anagrafica
WHERE ana_natoil > :data
ORDER BY ana_nome ASC" ;


    try {
        $st = $conn->prepare($query);
        $st->bindParam(":data", $data);
        $st->execute();
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore nell'estrazione dei dati " . $e->getMessage();
    }

foreach ($rows as $row){
    echo $row['ana_nome'] . " " . $row['ana_cognome'] . " " . raw2user($row['ana_natoil']);
    if(anniDiff($row['ana_natoil']) >= 18){
    echo " <a href='dettaglio.php?ID=" . $row['ana_id'] . "'> Dettagli </a>";
    echo "<br>";
}else
echo "<br>";
}


function anniDiff($data){
    $array = explode("-", $data);
    $anno = $array[0];
    $annoOggi = date("Y");
    $differenza = $annoOggi - $anno;
    return $differenza;
}




    ?>
</body>

</html>