<?php
session_start();
// 1 - 2 задание.
echo "1. Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя, запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой 'Привет, Имя!'.
<br><br>
2. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сохраненное время на экран.";
echo "<br><br>";
$_SESSION['loginForm'] = $_GET['loginForm']; // Логин из формы предыдущей страницы
$_SESSION['time'] = date('d.m.Y H:i:s'); // Время
$time = $_SESSION['time']; // присваиваю время в переменную
if(isset($_SESSION['loginForm'])){ // если содержиться логин, то
    $login = $_SESSION['loginForm']; // присваиваю переменную
//    echo "Привет, " . $login . "\n"; // вывожу логин
   echo "2. Вы авторизовались " . $time . "\n"; // вывожу время авторизации. Но оно не статично.
}
else{ // если условие сверху не срабатывает, вывожу ...
   echo "Что-то пошло не так";
}
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
    <p>1. Привет, <?php echo $login ?>!</p>
</body>
</html>