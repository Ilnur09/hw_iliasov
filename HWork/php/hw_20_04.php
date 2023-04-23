<?php

$login = isset($_POST['login']) ? $_POST['login'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
if ($password == true) {
    $passwordMD5 = md5($password);
    $data = time() . date('d.m.Y.') . "Логин: $login. Пароль: $password, Пароль MD5: $passwordMD5 \n";
}
else {
    $data = time() . date('d.m.Y.') . "Логин: $login. Пароль: $password \n";
}

file_put_contents('data.txt', $data, FILE_APPEND);
if (($password == 'Admin') || ($password == 'Password')) {
    header("Location: ../site/adminka.php");
} else {
    echo "<script> alert('Ввели не верный логин или пароль')</script>";
}