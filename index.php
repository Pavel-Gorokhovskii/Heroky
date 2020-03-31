<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
Username: 5HDGpZQpM6

Database name: 5HDGpZQpM6

Password: HxrlVnUEGT

Server: remotemysql.com

Port: 3306
    */
    $link = mysqli_connect("remotemysql.com", "5HDGpZQpM6", "HxrlVnUEGT")
        or die("Не удалось соединиться с сервером");

    mysqli_select_db($link, "5HDGpZQpM6")
        or die("Не удалось выбрать БД");

    // echo 'Hello WORLD!!!';

    // for ($i = 1; $i <= 10; $i++) {
    //     echo "<br> $i";
    // }



    ?>
</body>

</html>