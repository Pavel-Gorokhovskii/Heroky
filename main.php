<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='style.css' rel="stylesheet">
</head>

<body>
    <?php

    $link = mysqli_connect("remotemysql.com", "5HDGpZQpM6", "DsY35iC0qn")
        or die("Не удалось соединиться с сервером");

    mysqli_select_db($link, "5HDGpZQpM6")
        or die("Не удалось выбрать БД");


    $result = mysqli_query($link, "SELECT * FROM guest_book")
        or die("Не удалось выполнить запрос");


    echo "<table class = 'tables'>\n";
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>\n";

    mysqli_free_result($result);

    mysqli_close($link);


    /*
Username: 5HDGpZQpM6

Database name: 5HDGpZQpM6

Password: DsY35iC0qn

Server: remotemysql.com

Port: 3306
    */

    ?>
</body>

</html>