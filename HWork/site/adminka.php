<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Adminka</title>
</head>
<body>
    <div>
        <p><h1>Добро пожаловать. В даный момент страница разрабатывается, заходите позже</h1></p>
        <p>В последний раз Вы были на странице: <?php echo $_COOKIE['site'] ?></p>
    </div>
</body>
</html>