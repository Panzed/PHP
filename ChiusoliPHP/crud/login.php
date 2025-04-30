<?php
//faccio partire la sessione o recupero quella già attiva
session_start();
//pagina in cui verifico se utente e password inseriti dal navigatori
//sono corretti, cioè esiste un record nella tab. user con quei dati

include_once("inc/connessione.php");

// if (isset($conn))
//     echo "connessione eseguita";

//print_r($_POST);
$utente = $_POST['utente'];
$password = $_POST['password'];
$row = [];
try {

    $sql = "
        SELECT * FROM user
        WHERE user_utente = :utente
        AND user_password = :password
    ";
    $st = $conn->prepare($sql);
    $st->bindParam(':utente', $utente);
    $st->bindParam(':password', $password);
    $st->execute();
    $row = $st->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Eccezione catturata: " . $e->getMessage();
}

if ($row) {
    //login corretto
    //echo "id utente estratto: " . $row['use_id'];
    //setto la var di sessione loggato 
    //per lasciare l'informazione a tutte le pagine successive 
    //che questo utente è loggato correttamente
    $_SESSION['loggato'] = true;
    $_SESSION['user_id'] = $row['use_id'];

    //redirect alla pagina di elenco
    header('Location: elenco.php');
} else {
    //login NON corretto
    echo "nessun record estratto";
    //setto la var di sessione loggato 
    //per lasciare l'informazione a tutte le pagine successive 
    //che questo utente NON è loggato e non deve poter vedere le pagine
    $_SESSION['loggato'] = false;

    //redirect alla pagina di index (inserire un commento di errore)
    header('Location: index.php?msg=errore');
}
