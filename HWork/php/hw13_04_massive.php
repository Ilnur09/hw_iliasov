<?php
echo '<b>Урок 5-6. 8 задание. Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А.</b> <br><br>';
echo "С первой буквой: ";
$simbol = 'А';
$array = [['Январь', 'Февраль', 'Март'], ['Апрель', 'Май', 'Июнь'], ['Июль', 'Август', 'Сентябрь'], ['Октябрь', 'Ноябрь', 'Февраль']];
// print_r($array);
foreach ($array as $value) {
    foreach ($value as $item) {
        // echo $item . ' ';
        $firstSimbol = mb_substr($item, 0, 1);
        if (($firstSimbol == $simbol) || ($firstSimbol == $simbol)) {
            echo "$item ";
        }
    }
}

echo '<br><br>';
echo '<b>Урок 5-6. 9 задание. Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.
</b> <br><br>';
$random = mt_rand(5, 10);
$allItemMass = 0;
$array = [
    'Массив1' => [],
    'Массив2' => [],
    'Массив3' => [],
    'Массив4' => []
];
for ($i = 0; $i <= $random - 1; $i++) {
    $array['Массив1'][$i] = mt_rand(1, 59);
    $array['Массив2'][$i] = mt_rand(1, 100);
    $array['Массив3'][$i] = mt_rand(1, 66);
    $array['Массив4'][$i] = mt_rand(1, 32);
    // $allItemMass = $array['Массив1'][$i] + $array['Массив2'][$i] + $array['Массив3'][$i] + $array['Массив4'][$i];
}
foreach ($array as $item) {
    // print_r($item) . '<br>';
    $allItemMass += count($item);
}
echo 'Колличество элементов массива: ' . $allItemMass . '<br>';
echo 'Колличество значений 1 массива: ' . count($array['Массив1']) . '<br>';
echo 'Колличество значений 2 массива: ' . count($array['Массив2']) . '<br>';
echo 'Колличество значений 3 массива: ' . count($array['Массив3']) . '<br>';
echo 'Колличество значений 4 массива: ' . count($array['Массив4']) . '<br>';