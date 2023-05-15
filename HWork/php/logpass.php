<?php

// $login = isset($_POST['login']) ? $_POST['login'] : null;
// $password = isset($_POST['password']) ? $_POST['password'] : null;
// if ($password == true) {
//     $passwordMD5 = md5($password);
//     $data = time() . date('d.m.Y.') . "Логин: $login. Пароль: $password, Пароль MD5: $passwordMD5 \n";
// }
// else {
//     $data = time() . date('d.m.Y.') . "Логин: $login. Пароль: $password \n";
// }

// file_put_contents('data.txt', $data, FILE_APPEND);
// if (($password == 'Admin') || ($password == 'Password')) {
//     header("Location: ../site/adminka.php");
// } else {
//     echo "<script> alert('Ввели не верный логин или пароль')</script>";
// }
$hostname = 'localhost';
$username = 'Ilnur';
$password = 907;
$dbname = 'SignIn';
$connect = mysqli_connect($hostname, $username, $password, $dbname);

if (isset($_POST["login"])) {

    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $user = $_POST['login'];
        $regPassword = $_POST['password'];
        $regPassword = md5($regPassword);
        $query = mysqli_query($connect, "SELECT * FROM Users WHERE registration_login ='" . $user . "' AND registration_password = '" . $regPassword . "';");
        $rows = mysqli_num_rows($query);
        if ($rows != 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $dblogin = $row['registration_login'];
                $dbpassword = $row['registration_password'];
            }
            if ($user == $dblogin && $regPassword == $dbpassword) {
                $_SESSION['User'] = $user;
                header("Location: main.php");
            }
        } else {
            echo  "<Script> alert('Не верный логин или пароль')</script>";
        }
    }
}
?>