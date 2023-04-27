<?
setcookie('login', 'User', time() + 3600);
setcookie('count', $count);
if (isset($_GET['loginForm'])) {
    $login = $_GET['loginForm'];
    setcookie('login', $login, time() + 3600);
    setcookie('lastVisit', date('H:i'), time() + 3600 * 24 * 7, '/');
    echo 'Hello, ' . $login . "! " . $_COOKIE['lastVisit'];
} else {
    echo "Hello, Anonim!";
}


// 12 СЛАЙД. 13-14 УРОКА.
echo '1 задание. Пользователь заходит на страницу. Вам необходимо сохранить куки со значением name = "User". После обновления страницы нам необходимо вывести на экран "Hello User" (Значение User берется из куки)' . "<br>";
echo "<br>";


echo "Hello, " . $_COOKIE['login'] . "<br>";

echo "<br><br>";
echo '2 задание. Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час. Примечание: возможно понадобится форма для ввода логина.' . "<br>";
echo "<br>";


echo "<br><br>";
echo "3. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!' <br>";
$count = isset($_COOKIE['count']) ? $_COOKIE['count'] : 0;
$count++;

echo "<br>";
echo "Вы посетили страницу: " . $count;
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
    <span>Форма для второй задачи</span>
    <form action="">
        Логин <input type="login" name="loginForm">
        <input type="submit" placeholder="Подтвердить">
    </form>
</body>

</html>