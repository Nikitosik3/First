<?php 
    if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
        if( $_SERVER['REQUEST_METHOD'] !== 'POST' ) exit;
        
        if(empty($_POST['email'])) exit('Поле "email" не заполнено');
        if(empty($_POST['login'])) exit('Поле "login" не заполнено');
        if(empty($_POST['password'])) exit('Поле "passowrd" не заполнено');
        if(empty($_POST['password2'])) exit('Поле "passowrd" не заполнено');
      
    }
    if($_POST['password'] !== $_POST['password2']) {
exit('Пароли не совпадают');
    }
?>
  