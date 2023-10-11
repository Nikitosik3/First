<?php 
    $host       = "db4.myarena.ru";       // Адрес сервера базы данных
    $dbname     = "u19978_a01";           // Имя базы данных
    $user       = "u19978_a01";           // Имя пользователя
    $password   = "4U0d3F3m8Q";               // Пароль
    $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password); 
        
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;

            if(empty($_POST['login'])) exit('Поле "Логин" не заполнено');
            if(empty($_POST['password'])) exit('Поле "Пароль" не заполнено');

                $len = strlen($_POST['password']);
                if($len<8) exit('В поле "пароль" введено мало символов'); 
                if($len>20) exit('В поле "пароль" введено мало символов'); 

            if(empty($_POST['password1'])) exit('Поле "Подтвердите пароль" не заполнено');
            if($_POST['password'] !== $_POST['password1']) exit('Пароли не совпадают');
            if(empty($_POST['email'])) exit('Поле "Почта" не заполнено');

        $select = $connection->prepare("SELECT COUNT(`id`) as cnt FROM `user` WHERE `login` = ? or `email` = ?;");
        $res = $select->execute( [$_POST['login'], $_POST['email']]);
        $row = $select->fetch();
        if(!$res && !isset($row['cnt'])){
            
            exit('Ошибка регистрации...(3)');
        }

        if( $row[0] > 0){
            exit( 'Пользователь уже существует');
        }
        
             $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $date = [$_POST['login'], $pass_hash, $_POST['email']];
        $res = $connection->prepare ("INSERT INTO `user` (`login`, `password`, `email`) VALUES (?,?,?);");
        $res = $res->execute ($date);

        if( $res ){
            exit('Регистрация прошла успешно');
        }

        exit('Ошибка регистрации');

        
    
?>

