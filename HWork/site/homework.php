<?php

// 2 задание.
mkdir('./text');

// 1 задание.
file_put_contents('text/hello.txt', 'Hello, world! Im Name');

// 3 задание.
$file = file_get_contents('text/data.txt');
$fileMassiv = explode(' ', $file);
// print_r($fileMassiv);

// 4 задание.
$file1 = file_get_contents('text/file1.txt');
$file2 = file_get_contents('text/file2.txt');
$arrFile1 = explode('.', $file1);
$arrFile2 = explode('.', $file2);
$Allarray = array_merge($arrFile1, $arrFile2);
$notRepeatArray = array_unique($Allarray);
$stringConversion = implode('.', $notRepeatArray);
$file3 = file_put_contents('text/file3.txt', $stringConversion);
$result = file_get_contents('text/file3.txt');
echo "<br>";
// 5 Задание. Совместно с 4
$end = '';
foreach ($arrFile1 as $value1) {
    foreach ($arrFile2 as $value2) {
        if ($value1 == $value2) {
            $end .= $value1 . ".";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style_homework.css">
    <title>Домашняя работа</title>
</head>

<body>
    <header>
    </header>
    <div>
        <h2>Домашняя работа от 27.04.2023</h2>
    </div>
    <div>
        <h2>Урок 13-14. Слайд 13.</h2>
    </div>
    <br>
    <div>
        <?php echo '<b>1 задание. Удалить сессию при помощи специальной функции.</b><br>
        Решение: Ни где не указал, но удалить можно либо: <br>
        1. unset($_SESSION["Имя сессии"]);<br>
        2. $_SESSION["Имя сессии"] = "";'
        ?>
    </div>
    <br><br>
    <div>
        <?php echo "<b>2 задание. К задаче с авторизацией добавить две страницы (fact.php, bitrix.php). Необходимо запоминать последнюю посещенную страницу (либо fact.php, либо bitrix.php). После авторизации пользователя, необходимо вывести на экран, какая страница была посещена последней.</b><br>
        Решение: 2 страницы (fact.php и bitrix.php), находяться в папке site. Проверять стоит со страницы авторизации signIn.php (либо с главной страницы (main), заходить в Авторизацию). После Авторизации (Логин: Admin, Пароль: Password) появляется информация о последней посещаемой страницы при условии что на страницу ФАКТ или БИТРИКС заходили и возвращались обратно."; 
        ?>
    </div>
    <br><br>
    <div>
        <?php echo "<b>3 задание. Создайте список с выпадающим цветом. Задний фон сайта должен окрашиваться в выбранный цвет из списка. Если пользователе покинет сайт и заново войдет, нужно окрасить сайт в тот цвет, который был выбран последним.</b><br>
        Решение: На главное странице справа можно выбрать цвет. Сам файл находиться в папке function (fonColor.php)"; 
        ?>
    </div>
    <div>
        <h2>Урок 15-16. Слайд 12.</h2>
        <!-- Код наверху по всем 5 заданиям -->
    </div>
    <div>
        <?php echo "<b>1 задание. Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'. </b><br>";
        echo "Решение: Файл (hello.txt) находиться в папке text. Файл в папке site (homework.php) <- тут по всем 5 заданиям"; ?> 
        
    </div>
    <br><br>
    <div>
        <?php echo "<b>2 задание. Создайте папку 'test'. </b><br>";
        echo "Решение: mkdir('./text'); В данном случае сделал папку text" ?>
    </div>
    <br><br>
    <div>
        <?php echo "<b> 3 задание. Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию </b> <br>";
        echo "Из файла data.txt (в папке site/text) береться информация и выводиться: " . $fileMassiv[0] . $fileMassiv[1]; ?>
    </div>
    <br><br>
    <div>
        <?php echo "<b>4 задание. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл. </b> <br>";
        echo "Результат без повторений: " . $result . "<br>";
        ?>
    </div>
    <br><br>
    <div>
        <?php echo "<b>5 задание. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.</b> <br>";
        echo "Повторяющиеся: " . $end . "<br>";
        ?>
    </div>
    <br><br>
    <div>
        <h2>Урок 15-16. Слайд 13.</h2>
    </div>
    <div>
        <?php echo "<b>1 Задание. Создай форму загрузки аватарки на страницу. Картинка должна загружаться в папку foto.</b><br>";
        echo "Результат на главной странице в правой часте. Файл находиться в папке php (DownloadFoto.php)";
        ?>
    </div>
    <br><br>
    <div>
        <!-- <form action="" method="post" enctype="multipart/form-data"> не будет кодировать данные
        <label for="">Login:
            <input type="text" name="name">
        </label>
        <input type="submit">
        <input type="file" name="file">
    </form> -->
        <!-- <form action="">
            <input type="login" name="login">
            <input type="submit">
        </form> -->
    </div>

    <footer>

    </footer>
</body>

</html>