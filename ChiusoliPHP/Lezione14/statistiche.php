<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiche</title>
</head>
<body>
    <?php
// Scrivere le statistiche di accesso a questa pagina, cioè quante volte è stata visualizzata dai navigatori.
// Usiamo la sessione per contare gli accessi all'interno della sessione.
// Usiamo il db per contare gli accessi totali (da fare a casa)


// acessi nella sessione
//verifica che la variabile sia inizializzata
if (!isset($_SESSION['accessi'])) {
    $_SESSION['accessi'] = 0;
}

//incrementa il contatore
$_SESSION['accessi']++;

echo "sono stati effettuati " . $_SESSION['accessi'] . " accessi a questa pagina nella sessione.";




?>
</body>
</html>