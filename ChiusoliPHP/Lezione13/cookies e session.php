<!-- il setuyp dei cokies è da fare prima di stampare a video -->
<?php
// setcookie('lingua', 'it');
setcookie('lastTime', date('Y-m-d h:i:s'));
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
<?php
echo 'lingua del cookie: ' . $_COOKIE['lingua'] . '<br>';
$_SESSION['linguaDiSessione'] = "it";
print_r($_SESSION);
?>
</body>

</html>