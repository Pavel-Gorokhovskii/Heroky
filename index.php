<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $link = mysqli_connect("remotemysql.com", "5HDGpZQpM6", "HxrlVnUEGT")
        or die("Не удалось соединиться с сервером");

    mysqli_select_db($link, "5HDGpZQpM6")
        or die("Не удалось выбрать БД");

    $query = "SELECT * FROM 5HDGpZQpM6";

    $result = mysqli_query($link, $query)
        or die("Не удалось выполнить запрос");

    echo "<table>\n";
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

Password: HxrlVnUEGT

Server: remotemysql.com

Port: 3306
    */

    ?>
</body>

</html>