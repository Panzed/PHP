<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-1 {
            background-color: red;
        }

        .body-2 {
            background-color: orange;
        }

        .body-3 {
            background-color: yellow;
        }

        .body-4 {
            background-color: green;
        }

        .body-5 {
            background-color: blue;
        }

        .body-6 {
            background-color: purple;
        }
    </style>
</head>

<body class="body-<?= rand(1, 6) ?>">
    <?php echo "<h1>Hello World!</h1>"; ?>
</body>

</html>

<!-- Il codice html può essere all'interno di un comando php, come in questo caso, dove il comando echo stampa il testo "Hello World!"
  in un h1;
    Inoltre, la classe del body è generata casualmente tra 6 classi predefinite, in modo da avere un colore di sfondo diverso ad ogni ricaricamento della pagina. -->