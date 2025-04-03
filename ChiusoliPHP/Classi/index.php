<?php
include_once "Persona.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio sulle classi</title>
</head>

<body>
    <?php

    $s = new Persona("Mario", "Rossi");
    $d = new Persona("Giovanni", "Verdi");
    $d->setAsDocente();

    $persone = [$s, $d];
    //presentazione di tutte le persone
    foreach ($persone as $p) {
        $p->presentati();
    }

    //media dei voti delle materie dello studente $s
    // $s studia: php e db
    $php = new Materia("php", $d);
    $db = new Materia("db");
    $js = new Materia("js");
    $matematica = new Materia("matematica");
    //...
    // $s->addMateria($php);
    // $s->addMateria($db);
    $s->setMaterie([$php, $db]);
    $s->setMaterie([$js, $matematica]);




    ?>
</body>

</html>