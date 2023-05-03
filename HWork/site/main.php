<?php
session_start();
?>
<?php include_once '../function/timeDayNight.php' ?>
<?php include_once '../function/sum_word.php' ?>
<?php include_once '../function/date.php' ?>
<?php include_once '../function/fonColor.php' ?>
<?php include_once '../php/DownloadFoto.php' ?>
<?php ?>

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

<body style="background-color: <?php echo FonColor() ?>;">
	<header>
		<div class="menu">
			<?php include_once '../php/top_menu.php' ?>
		</div>
		<div>
			<form action="" method="post">
				<input type="color" name="color" value=<?php echo FonColor() ?>>
				<input type="submit" value="Применить">
			</form>
			<form action="" method="post" enctype="multipart/form-data">
				<input id="downldFoto" type="file" name="file">
				<input type="submit" value="Загрузить">
			</form>
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

	<div class="info_hobby">
		<!-- <div><p class="razdel_zagolovok">Любимы игры</p></div> -->
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
			<?php dateHB() ?>
		</div>
		<div>

			<?php sum_word() ?>
		</div>

	</footer>
</body>

</html>