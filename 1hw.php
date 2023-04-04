<?php
//Задание 1

for ($i = 5; $i <= 13; $i++)
    echo $i . "<br>";


//Задание 2.

// WHILE

$num = 1000;
$a = 0;
while ($num > 50) {
    $num = $num / 2;
    $a++;
    echo 'Поделили' . ' ' . "$a" . ': ' . "$num" . "<br>";
}
echo 'Итераций' . ' ' . '= ' . "<b>" . "$a" . "</b>" . "<br>";


// FOR

$b = 0;
for ($num1 = 1000; $num1 > 50;) {
    $num1 = $num1 / 2;
    $b++;
    echo 'Поделили' . ' ' . "$b" . ': ' . "$num1" . "<br>";
}
echo 'Итераций' . ' ' . '= ' . "<b>" . "$b" . "</b>" . "<br>";

// 3 задание

$o = '10';
switch ($o) {
    case '0':
        echo '0,1,2,3,4,5,6,7,8,9,10';
        break;
    case '1':
        echo '0,1,2,3,4,5,6,7,8,9';
        break;
    case '2':
        echo '0,1,2,3,4,5,6,7,8';
        break;
    case '3':
        echo '0,1,2,3,4,5,6,7';
        break;
    case '4':
        echo '0,1,2,3,4,5,6';
        break;
    case '5':
        echo '0,1,2,3,4,5';
        break;
    case '6':
        echo '0,1,2,3,4';
        break;
    case '7':
        echo '0,1,2,3';
        break;
    case '8':
        echo '0,1,2';
        break;
    case '9':
        echo '0,1';
        break;
    case '10':
        echo '0';
        break;
    default:
        echo 'Нет совпадений';
        break;
}
