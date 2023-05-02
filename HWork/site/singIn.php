<?php
session_start();
setcookie('site', 'http://homework/hw_iliasov/HWork/site/singIn.php', time() + 3600 * 60 * 24);
$_COOKIE['site'] = $_POST['site'];
if(isset($_COOKIE['site'])){
    $lastUrl = $_COOKIE['site'];
    setcookie('site', $lastUrl, time()+3600*60*24);
}


include_once '../php/hw_20_04.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Авторизация</title>
</head>

<body>
    <div>
        <form action="" method="post">
            <div>
                <span> Логин </span>
                <input type="login" name="login">
            </div>
            <div>
                <span> Пароль </span>
                <input type="password" name="password">
            </div>
            <div>
                <button type="submit">Авторизоваться</button>
            </div>
            <br>
            <div>
                <span><a href="./registrations.php">Зарегистрироваться</a></span>
            </div>
            <br>
            <div>
                <a href="./fact.php" name="site">ФАКТ</a>
                <span> / </span>
                <a href="./bitrix.php" name="site">Битрикс24</a>
            </div>
        </form>

    </div>
</body>

</html>