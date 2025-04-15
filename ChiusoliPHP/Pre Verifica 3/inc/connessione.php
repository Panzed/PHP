<?php
include_once("config.php");

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $conn = new PDO($dsn, $user, $pass);
} catch (Exception $e) {
    echo "Eccezione catturata: " . $e->getMessage();
}
