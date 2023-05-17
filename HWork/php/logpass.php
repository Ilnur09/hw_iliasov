<?php
require '../function/signindb.php';

$signIn = new signin('localhost', 'Ilnur', 907, 'SignIn');

if (isset($_POST["login"])) {

    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $user = $_POST['login'];
        $regPassword = $_POST['password'];
        $regPassword = md5($regPassword);
        $query = mysqli_query($signIn->connect, "SELECT * FROM Users WHERE registration_login ='" . $user . "' AND registration_password = '" . $regPassword . "';");
        $rows = mysqli_num_rows($query);
        if (($user == 'Admin') || ($regPassword == 'Password')) {
                header("Location: ../site/adminka.php");
}
        elseif ($rows != 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $dblogin = $row['registration_login'];
                $dbpassword = $row['registration_password'];
                
            }
            if ($user == $dblogin && $regPassword == $dbpassword) {
                $_SESSION['User'] = $user;
                header("Location: index.php");
                setcookie('User', $user, time()+3600*60*30*24, '/');
            }
        } else {
            echo  "<Script> alert('Не верный логин или пароль')</script>";
        }
    }
}
?>