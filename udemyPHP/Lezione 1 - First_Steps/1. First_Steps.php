<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo "Hello World!"; ?></h1>
    <br>
    <h1>This is my first .PHP file</h1>
    <br>
    <h1>A dice roll: <?php echo rand(1, 6); ?></h1>
</body>

</html>


<!-- php può nestare all'interno di html;
 per richiamare i comandi php il tag è < ?php ...... ? > (senza spazi);
 il tag per mostrare un output è echo ".."; 
 l'attributo rand(...) genera (in questo caso) un numero causale tra la sequenza di numeri compresa tra quelli in parentesi ()-->