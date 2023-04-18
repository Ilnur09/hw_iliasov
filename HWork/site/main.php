<?php include '../php/time.php' ?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= $time ?>">
	<link rel="stylesheet" href="../style/media0_360.css">
	<link rel="stylesheet" href="../style/media361_576.css">
	<link rel="stylesheet" href="../style/media577_768.css">
	<link rel="stylesheet" href="../media577_768.css">
	<!-- <link rel="stylesheet" href="../style/media_over1201.css"> -->
	<style>
		<?php $time ?>
	</style>
	<title>Моя первая страничка</title>
</head>

<body>
	<header>
		<div class="menu">
			<div>
				<a class="menu_top" href="../site/homework.php" target="_parent" title="Тут задания которые не успели выполнить на уроке">ДЗ</a>
			</div>
			<div>
				<a class="menu_top" href="../site/table_mendeleev.php" target="_blank" title="Посмотрим как выглядит Таблица Менделеева? Давай быстрее кликай">Таблица менделеева</a>
			</div>
			<div>
				<a class="menu_top_registrations" href="../site/registrations.php" target="_self">Регистрация</a>
			</div>
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
				<?php include '../php/info.php' ?>
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
			<div class="text_game">Действие игр серии Assassins Creed происходит в разные эпохи в истории человечества
				и в разных странах, на фоне различных исторических событий, таких как Третий крестовый поход или Великая
				французская революция, с добавлением тем научной фантастики, мифологии и криптоистории. Объединяющий
				сюжет, затрагивающий в том числе и XXI век, рассказывает о многовековой тайной борьбе двух организаций -
				тамплиеров и ассасинов.<br>
				Самая любимая серия игр :3
			</div>
		</div>
		<div class="game_right">
			<div class="game1"><img id="NMS" src="../img/NoMan'sSky.jpeg" title="No Man's Sky" alt="Упс! Попробуй обновить страницу =)"></div>
			<div class="text_game">Игра предлагает игроку исследовать виртуальную вселенную
				чрезвычайно больших размеров, состоящую 18 квинтиллионов планет; возможные занятия для
				игровых персонажей включают в себя поиск новых интересных мест, выживание на фоне различных
				опасностей,
				сражения с врагами и торговлю различными предметами. Для создания виртуального мира игра широко
				использует процедурную генерацию содержимого, основанную на детерминированных алгоритмах.
			</div>
		</div>
		<div class="game_left">
			<div class="game1"><img id="TWWH" src="../img/TheWitcher3.jpeg" title="The Witcher 3" alt="Упс! Попробуй обновить страницу =)"></div>
			<div class="text_game">Игра в стиле фэнтези, мир которой основан на славянской мифологии,
				повествует о ведьмаке Геральте из Ривии, охотнике на чудовищ, чья приёмная дочь Цири находится в
				опасности, будучи преследуемой Дикой Охотой - загадочной потусторонней силой. Многие детали сюжета
				отсылают к книгам, написанным Сапковским,
				но сюжет остаётся связанным с первыми двумя частями и подводит итог трилогии, начатой первой игрой,
				вышедшей восемью годами ранее.</div>
		</div>
		<div class="game_right">
			<div class="game1"><img id="SC" src="../img/Splintercell.jpeg" title="Splinter Cell" alt="Упс! Попробуй обновить страницу =)"></div>
			<div class="text_game">Серия компьютерных игр в жанре стелс-экшена, курировавшаяся американским писателем
				Томом Клэнси. Благодаря успеху серии в её составе представлено уже несколько игр и книг по мотивам.
				Главный герой серии - Сэм Фишер, специальный агент вымышленного подразделения АНБ «Третий эшелон» (позже
				«Четвертый эшелон»), специализирующийся на скрытном проникновении. В ходе нескольких игр Фишер разрушает
				планы террористов, угрожающих безопасности США.</div>
		</div>
	</div>
	<br>
	<br>
	<div>
		<p class="razdel_zagolovok">Любимые фильмы</p>
	</div>
	<div class="interests_osnova">
		<div class="interests">
			<div class="art1"><img src="../img/StarWars.jpg" id="starwars" title="Звездные Войны" alt="Упс! Обнови страничку и попробуй еще раз"></div>
			<div class="text_interests">Медиафраншиза в жанре эпическая космическая опера, включающая в себя 12
				художественных фильмов (9 эпизодов основной саги, также известна как «Сага Скайуокеров», 2 фильма
				«историй» и 1 анимационный), а также игровые и анимационные сериалы, игровые телефильмы, документальные
				фильмы, книги, комиксы, видеоигры, аттракционы, игрушки и прочие произведения, созданные в рамках единой
				фантастической вселенной «Звёздных войн», задуманной и реализованной американским режиссёром Джорджем
				Лукасом в конце 1970-х годов, позднее расширенной.</div>
		</div>
		<div class="interests">
			<div class="art1"><img src="../img/BacktotheFuture.jpg" id="back_future" title="Назад в будущее" alt="Упс! Обнови страничку и попробуй еще раз"></div>
			<div class="text_interests">Подросток Марти с помощью машины времени, сооружённой его другом-профессором
				доком
				Брауном, попадает из 80-х в далекие 50-е. Там он встречается со своими будущими родителями, ещё
				подростками, и другом-профессором, совсем молодым.</div>
		</div>
		<div class="interests">
			<div class="art1"><img src="../img/Naruto.jpg" id="naruto" title="Наруто" alt="Упс! Обнови страничку и попробуй еще раз"></div>
			<div class="text_interests">Сёнэн-манга Масаси Кисимото, рассказывающая о жизни
				шумного и непоседливого ниндзя-подростка Наруто Удзумаки, мечтающего достичь всеобщего признания и стать
				Хокагэ — главой своего селения и сильнейшим ниндзя. Чтобы добиться уважения окружающих, ему предстоит
				пройти через тысячи препятствий: экзамены ниндзя, различные миссии и сражения.</div>
		</div>
		<div class="interests">
			<div class="art1"><img src="../img/HarryPotter.jpg" id="harrypotter" title="Гарри Поттер" alt="Упс! Обнови страничку и попробуй еще раз"></div>
			<div class="text_interests">Фильм рассказывает, как мальчик-сирота, живший у своих тетей с дядей, тщательно
				скрывавших его истинное происхождение из-за боязни всего "необычного", в день своего 11-го дня рождения
				узнает, что он - настоящий волшебник. И мир, в котором Гарри провел свое детство - не его. Теперь, он
				должен отправиться в самую лучшую школу Чародейства и Волшебства Хогвартс. Где он будет жить среди
				подобных ему магов, научиться стать сильным и даже узнает тайну гибели своих родителей... но еще большей
				неожиданностью для него станет то, что в мире волшебников, Гарри Поттер, является знаменитостью.</div>
		</div>
	</div>

	<footer class="end">
		<div>
			<?php include '../php/date.php' ?>
		</div>
		<div>
			<?php include '../php/sum_word.php' ?> 
		</div>

	</footer>
</body>

</html>