<?php
session_start();
echo "Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.";
echo "<br><br>";

if (empty($_SESSION['time'])) $_SESSION['time']; // если time в сессии не заполнен, устанавливаю = time();

echo "Последняя авторизация была " . time() - $_SESSION['time'] . " секунд назад" . "\n"; // разница с последней авторизацией последняя авторизация.
// p.s. возникла сложность, изначально всё отрабатывает и показывает, но если ввести логин, перейти на следующую страницу и вернуться обратно. То всё ломается.
echo "<br><br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./hello.php">
        Login <input type="login" name="loginForm">
        <input type="submit" placeholder="Apply">
    </form>
</body>

</html>