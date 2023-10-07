<!DOCTYPE HTML>
    <HTML lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>7</title>
  
        </head>
    <body>
        <form action="action.php" method="post">
            <h3>Форма ввода данных</h3>
            <p><span class="error"> * обязательное поле </span></p>
            <p>Логин: <span class="error">* <input type="text" name="login"></p>
            <p>Пароль: <span class="error">* <input type="password" name="password"></p>
            <p>Подтвердите пароль: <span class="error">* <input type="password" name="password1"></p>
            <p>Почта: <span class="error">* <input type="email" name="email"></p>
            <p><input type="submit" value="Зарегистрироваться"></p> 
        </form>
    </body>
</html>