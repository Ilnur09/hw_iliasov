<?php
session_start();
setcookie('site', 'http://homework/hw_iliasov/HWork/site/fact.php', time() + 3600 * 60 * 24);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_homework.css">
    <title>FAKT</title>
</head>

<body>
    <div>
        <span> Последняя страница <?php echo $_COOKIE['site'] ?></span>
    </div>
</body>

</html>