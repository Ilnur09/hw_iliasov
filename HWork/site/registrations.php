<?php
include_once '../function/registration.php';
include_once '../function/timeDayNight.php';
require '../function/signindb.php'; // файл подключения к БД.

session_start();
$main = 'http://homework/hw_iliasov/HWork/site/index.php';

$signIn = new signin('localhost', 'Ilnur', 907, 'SignIn');

if (!empty($_POST['registration_login']) && !empty($_POST['registration_password']) && !empty($_POST['registration_email'])) {
    $proverkaLogina = $_POST['registration_login'];
    $mysql_login = mysqli_query($signIn->connect, "SELECT * FROM Users WHERE registration_login = '" . $proverkaLogina . "';");
    $mysql_loginRows = mysqli_num_rows($mysql_login);
    if ($mysql_loginRows == 0) {
        $registrationLogin = $_POST['registration_login'];
        $registrationPassword = md5($_POST['registration_password']); // Шифрую пароль
        $registrationEmail = $_POST['registration_email'];
        $insert = "INSERT INTO Users (registration_login, registration_password, registration_email) VALUE ('$registrationLogin', '$registrationPassword', '$registrationEmail');";
        mysqli_query($signIn->connect, $insert);
        setcookie('User', $registrationLogin, time()+3600*60*30*24, '/');
        header('Location: ' . $main);
    } else {
        echo "<script> alert('Такой логин уже существует. Выберите другой логин или попробуйте авторизоваться.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<? echo timeDN() ?>">
    <link rel="stylesheet" href="../style/media0_360.css">
    <link rel="stylesheet" href="../style/media361_576.css">
    <link rel="stylesheet" href="../style/media577_768.css">
    <link rel="stylesheet" href="../media577_768.css">
    <title>Регистрация</title>
</head>

<body>
    <header></header>


    <div>
        <form action="" method="post">
            <label for="registration_name">Имя пользователя</label>
            <input type="text" name="registration_login" id="registration_name">
            <br>
            <br>
            <label for="registration_password">Пароль</label>
            <input type="password" name="registration_password" id="registration_password">
            <br>
            <br>
            <label for="registration_email">Почта</label>
            <input type="email" name="registration_email" id="registration_email">
            <br>
            <br>
            <input type="submit" value="Всё, я справился с заполнением формы">
        </form>
    </div>



    <footer></footer>

</body>

</html>