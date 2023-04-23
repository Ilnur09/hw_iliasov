<?php include_once '../php/phpcourse.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Course</title>
</head>

<body>
    <div class="like">
        <form action="<? echo $phpCourse ?>" method="post">
            <div>
                <label for="lab">Выберите лабораторию</label>
                <select name="login" id="lab">
                    <option value="1">Lab1</option>
                    <option value="2">Lab2</option>
                    <option value="3">Lab3</option>
                    <option value="4">Lab4</option>
                </select>
            </div>
            <br>
            <div>Почта: <input type="email" name="email" placeholder="Почта"></div>
            <br>
            <div>Комментарий: <textarea name="comment" id="" cols="40" rows="3" placeholder="Комментарий"></textarea></div>
            <br>
            <div><button type="submit" target="_blank">Отправить</button></div>

        </form>
    </div>
</body>

</html>