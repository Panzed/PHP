<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
</head>

<body>
    <h1>Accedi all'area riservata</h1>
    <?php 
    if(isset($_GET['msg'])){
        echo "Credenziali non corrette. Riprovare";
    }
    ?>
    <form
        action="login.php"
        method="post"
        enctype="multipart/form-data"
        id="form1">


        <label for="utente" autocomplete="off">utente:</label>
        <input type="text"
            name="utente" placeholder="utente" id="IDnome" required />
        <br>
        <label for="password">password</label>
        <input
            type="password"
            name="password"
            placeholder="password"
            id="password"
            required />

        <br>
        <button type="submit">Accedi</button>
    </form>


</body>

</html>