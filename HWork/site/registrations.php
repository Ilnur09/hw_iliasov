<?php
session_start();
setcookie('User', 'NoName');
$main = 'http://homework/hw_iliasov/HWork/site/main.php';
$hostname = 'localhost';
$username = 'Ilnur';
$password = 907;
$dbname = 'SignIn';
$connect = mysqli_connect($hostname, $username, $password, $dbname) or die("Упаньки");



// print_r($mysql_login);

if (!empty($_POST['registration_login']) && !empty($_POST['registration_password']) && !empty($_POST['registration_email'])) {
    $proverkaLogina = $_POST['registration_login'];
    $mysql_login = mysqli_query($connect, "SELECT * FROM Users WHERE registration_login = '" . $proverkaLogina . "';");
    $mysql_loginRows = mysqli_num_rows($mysql_login);
    if ($mysql_loginRows == 0) {
        $registrationLogin = $_POST['registration_login'];
        $registrationPassword = md5($_POST['registration_password']); // Шифрую пароль
        $registrationEmail = $_POST['registration_email'];
        $insert = "INSERT INTO Users (registration_login, registration_password, registration_email) VALUE ('$registrationLogin', '$registrationPassword', '$registrationEmail');";
        mysqli_query($connect, $insert);
        setcookie('User', $registrationLogin, time()+3600*60*30*24, '/');
        header('Location: ' . $main);
    } else {
        echo "<script> alert('Такой логин уже существует. Выберите другой логин или попробуйте авторизоваться.')</script>";
    }
}


?>

<?php include_once '../function/registration.php' ?>
<?php include_once '../function/timeDayNight.php' ?>

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

            <!-- <label for="registration_course">Что Вы изучали?</label>
            <select name="select" id="registration_course">
                <option value="php">PHP</option>
                <option value="C#">C#</option>
                <option value="JavaScript">JavaScript</option>
                <option value="htnl">HTML</option>
                <option value="java">Java</option>
                <option value="python">Python</option>
            </select>
            <br>
            <br>
            <fieldset>
                <legend>Что Вы изучали?</legend>
                <input type="radio" name="I want to be" value="junior">Junior PHP Devolper
                <input type="radio" name="I want to be" value="middle">Middle PHP Devolper
                <input type="radio" name="I want to be" value="Fronted">Fronted PHP Devolper
                <input type="radio" name="I want to be" value="designer">Нееее, хочу быть дизайнером
            </fieldset>
            <br>
            <br>
            <fieldset style="width: 66%;">
                <legend>Мои навыки програмирования</legend>
                <input type="checkbox" name="My skil prog" value="god">Бог програмировани
                <input type="checkbox" name="My skil prog" value="guru">Гуру програмировани
                <input type="checkbox" name="My skil prog" value="learning">Я только обучаюсь
            </fieldset>
            <br>
            <br>
            <label for="time_learning">Во сколько мне удобно приходить на занятия?</label>
            <input type="datetime-local" name="date" id="time_learning" style="margin-left: 10px;">
            <br>
            <br>
            <label for="wish_course">Мои пжелания и комментарии по курсам</label>
            <textarea name="wish" id="wish_course" style="margin-left: 45px;"></textarea> -->

        </form>
    </div>



    <footer></footer>

</body>

</html>