<?php
// В отзыве ο занятиях необходимо каждое четное слово окрасить в первый цвет, 
// каждое нечетное слово окрасить во второй цвет. 
$num = 1;
$otziv = 'На первом уроке всё было доступно и понятно
<br>
Хорошо что есть возможность поразбирать свои ошибки и ошибки своих коллег
<br>
Нетерпиться уже поизучать PHP, но всему своё время.
<br>
По одному уроку не судят, но в общем и целом всё понравилось.
<br>
Регина для нас теперь прям как старшая сестра - подскажет, расскажет и поругает если надо
<br>';
$otzivMassiv = explode(' ', $otziv);
// print_r($otzivMassiv);
foreach ($otzivMassiv as $key => $item) {
    if (($key % 2) == 0) {
        echo '<span style = "color: rgb(255, 0, 0);"> ' . $item . ' </span>';
    } else {
        echo '<span style = "color: rgb(255, 187, 0);"> ' . $item . ' </span>';
    }
}
