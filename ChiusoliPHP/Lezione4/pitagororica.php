<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tavola Pitagorica</h1>

    <table>
        <tr>
            <th></th>
            <?php
            for ($i = 1; $i <= 10; $i++)
                echo "<th>$i</th>";
            ?>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th> $i </th>";
            for ($y = 1; $y <= 10; $y++) {
                echo "<td>" . $i * $y . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <br><br><br><br><br>



    <table style="border: 1px solid black;">
        <tr>
            <th></th>
            <?php

            for ($i = 1; $i <= 10; $i++)
                echo "<th> $i </th>";
            ?>
        </tr>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th> $i </th>";
            for ($y = 1; $y <= 10; $y++) {
                echo "<td>" . $y * $i . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>


</body>

</html>