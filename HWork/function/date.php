<?php
// . На сайт ввести дату рождения. Вернуть текущую дату. 
// Определите количество дней между датами. 
// Например, 21.09.1994 – дата рождения, 29.11.2021 – текущее значение. Разность – 9882 дня.
function dateHB()
{
    echo 'Сегодня ' . date('d.m.y') . '<br>';

    $myHappyBirthday = date_create_from_format('d.m.Y', '09.07.1994');
    $dateNow = date_create();
    $difference = date_diff($dateNow, $myHappyBirthday, true);
    echo $difference->format('Разница в %a день, между моим Днем Рождения и сегоднешним днём');
}
