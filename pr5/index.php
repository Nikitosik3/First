<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<style>
    .heading{
        background-color: green;
        align-items: center;
        color: aliceblue;
    }
    </style>
<?php


    $host       = "db4.myarena.ru";      // Адрес сервера базы данных
    $dbname     = "u19978_a01";    // Имя базы данных
    $user       = "u19978_a01";           // Имя пользователя
    $password   = "4U0d3F3m8Q";               // Пароль

    try{
         $connection = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user, $password);
    }catch (\throwble $th) {
        echo "Ошиба подключения "; return;
    }
   
 echo "<table border = 1>";
    
$result = $connection->query ('SELECT * FROM `product`');
$row = $result->fetch ( PDO::FETCH_ASSOC);

foreach ($row as $key => $value) {
    echo "<td align=center bgcolor=green>".$key."</td>";
}

do{
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<td>".$value."</td>";}
        echo "</tr>";
}


 while($row = $result->fetch( PDO::FETCH_ASSOC ));
     echo "</table>";
?>
</body>
</html>
