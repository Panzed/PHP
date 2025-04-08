<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connessioni DB</title>
</head>

<body>
    <?php
    $host = "localhost:10010";
    $dbname = "adventureworks2019_2025";
    $dsn = "mysql:host=$host;dbname=$dbname";
    $user = "root";
    $pass = "root";



    try {
        // 1. Connessione al DBMS
        $conn =  new PDO($dsn, $user, $pass);
        echo "connessione eseguita con successo";

        // 2. preparare la query
        $cognome = $_GET["cognome"];
        $nome = "Anna";
        $query="SELECT FirstName, LastName FROM person WHERE LastName = :cognome AND FirstName = :nome";  // se la variabile deriva da un input esterno, non va mai concatenata alla query, ma va sempre usato un segnaposto
        $st = $conn->prepare($query);

        // 3. bind
        $st->bindParam(":cognome", $cognome); // il nome del parametro deve essere lo stesso di quello definito nella query come segnaposto, e il secondo argomento è la variabile PHP che contiene il valore da passare al parametro
        $st->bindParam(":nome", $nome); // il nome del parametro deve essere lo stesso di quello definito nella query come segnaposto, e il secondo argomento è la variabile PHP che contiene il valore da passare al parametro

        //4. eseguire la query
        $st->execute();

        // 5. Fetch (solo per SELECT)
        $rows = $st->fetchAll(PDO::FETCH_ASSOC);  // array bidimensionale associativo dove ogni riga è un array associativo
    } catch (Exception $e) {
        echo "Eccezione catturata: " . $e->getMessage();
    }

echo "<br>";
echo "record estratti: " . count($rows) . "<br>";

//stampo i record
foreach ($rows as $row) {
    echo $row["FirstName"] . " " . $row["LastName"] . "<br>";
}



    ?>
</body>

</html>