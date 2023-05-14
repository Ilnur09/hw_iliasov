<?php include_once '../php/logpass.php' ?>

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
        </form>

    </div>
</body>

</html>