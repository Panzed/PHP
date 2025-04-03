<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>

<body>


    <?php
    echo "POST: ";
    print_r($_POST);

    echo "<br>GET: ";
    print_r($_GET);

    echo "<br>REQUEST: ";
    print_r($_REQUEST);

    ?>
    <br>
    Ciao
    <?php echo $_REQUEST['nome']; ?>, grazie di esserti registrato...

</body>

</html>