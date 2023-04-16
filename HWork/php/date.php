<?php
// . На сайт ввести дату рождения. Вернуть текущую дату. 
// Определите количество дней между датами. 
// Например, 21.09.1994 – дата рождения, 29.11.2021 – текущее значение. Разность – 9882 дня.
echo 'Сегодня ' . date('d.m.y');

$myHappyBirthday = date_create('09.07.1994');
$dateNow = date('d.m.y');
$dateMassivHB = explode('.', $myHappyBirthday);
$dateMassivNow = explode('.', $dateNow);
print_r($dateMassivNow);
$difference = $dateMassivNow - $dateMassivHB;
echo "Разница между моим Днем рожденья и сегоднешнием днём составялет: " . $difference . ' ';
