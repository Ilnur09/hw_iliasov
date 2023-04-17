<?php
// . На сайт ввести дату рождения. Вернуть текущую дату. 
// Определите количество дней между датами. 
// Например, 21.09.1994 – дата рождения, 29.11.2021 – текущее значение. Разность – 9882 дня.
echo 'Сегодня ' . date('d.m.y');

$myHappyBirthday = date_create_from_format('09.07.1994');
$dateNow = date_create();
$difference = date_diff($dateNow, $dateHappyBithday, true);
echo $difference->format('Разница между моим ДР и сегоднешним днём');
