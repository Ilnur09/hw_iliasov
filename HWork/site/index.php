<?php
session_start();
if(isset($_COOKIE['User']) ? $_COOKIE['User'] : $_COOKIE['User'] = ' ');
include_once '../function/timeDayNight.php';
include_once '../function/sum_word.php';
include_once '../function/date.php';
include_once '../function/registration.php';

require '../function/signindb.php';

$signIn = new signin('localhost', 'Ilnur', 907, 'SignIn');

// Создал БД
// mysqli_query($connect, "CREATE DATABASE $dbname");

// Добавил таблицу.
// mysqli_select_db($connect, $dbname);
// mysqli_query($connect, "CREATE TABLE Users(
// id_person INT(6) AUTO_INCREMENT PRIMARY KEY,
// registration_login VARCHAR(20) NOT NULL,
// registration_password VARCHAR(30) NOT NULL,
// registration_email VARCHAR(30) NOT NULL
// )");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<? echo timeDN() ?>">
	<link rel="stylesheet" href="../style/media0_360.css">
	<link rel="stylesheet" href="../style/media361_576.css">
	<link rel="stylesheet" href="../style/media577_768.css">
	<link rel="stylesheet" href="../media577_768.css">
	<!-- <link rel="stylesheet" href="../style/media_over1201.css"> -->
	<title>Моя первая страничка</title>
</head>

<body>
	<header>
		<div class="menu">
			<div style="margin-right: 5%;">
				<?php echo "Добро пожаловать " . $_COOKIE['User'] ?>
			</div>
			<?php include_once '../php/top_menu.php' ?>
		</div>
	</header>
	<div class="main">
		<div class="mainL">
			<div class="foto">
				<img id="ilnur" src="../img/me.jpg" title="Красавчик" alt="Упс, что-то пошлшо не так!">
			</div>
		</div>
		<div class="mainR">
			<div class="FIO">
				Ильнур Ильясов
			</div>
			<div class="info">
				<?php include_once '../php/info.php' ?>
			</div>
			<div class="like">
				<?php include_once '../php/like.php'; ?>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div>
		<p class="razdel_zagolovok">Любимые игры</p>
	</div>
	<div class="info_hobby">
		<div class="game_left">
			<div class="game1"><img id="AC" src="../img/AC.jpg" title="Assassin'sCreed" alt="Упс! Попробуй обновить страницу =)"></div>
			<?php include_once '../php/gameAC.php' ?>
		</div>
		<div class="game_right">
			<div class="game1"><img id="NMS" src="../img/NoMan'sSky.jpeg" title="No Man's Sky" alt="Упс! Попробуй обновить страницу =)"></div>
			<?php include_once '../php/gameNMS.php' ?>
		</div>
		<div class="game_left">
			<div class="game1"><img id="TWWH" src="../img/TheWitcher3.jpeg" title="The Witcher 3" alt="Упс! Попробуй обновить страницу =)"></div>
			<?php include_once '../php/gameTW.php' ?>
		</div>
		<div class="game_right">
			<div class="game1"><img id="SC" src="../img/Splintercell.jpeg" title="Splinter Cell" alt="Упс! Попробуй обновить страницу =)"></div>
			<?php include_once '../php/gameSC.php' ?>
		</div>
	</div>
	<br>
	<br>
	<div>
		<p class="razdel_zagolovok">Любимые фильмы</p>
	</div>
	<div class="interests_osnova">
		<?php include_once '../php/myInteres.php' ?>
	</div>

	<footer class="end">
		<div>
			<!-- <?php dateHB() ?> -->
		</div>
		<div>

			<!-- <?php sum_word() ?> -->
		</div>

	</footer>
</body>

</html>