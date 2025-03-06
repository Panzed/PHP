<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funzioni</title>
</head>

<body>
    <?php

    $a = [1, 2, 3];
    $a[] = rand(0, 100);

    echo "a contine n. " . count($a) . " elementi <br>";

    print_r($a);


    ?>
</body>

</html>