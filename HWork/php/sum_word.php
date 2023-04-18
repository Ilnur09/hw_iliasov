<?php
$glasnye = 'А,а,О,о,У,у,Ы,ы,Э,э,Е,у,Ё,ё,И,и,Ю,ю,Я,я';
$sum = 0;
$glasnyeMas = explode(',', $glasnye); // Пусть будет на всякий.
$file = file_get_contents('./main.php'); // обращение к файлу
// var_dump($file);
$fileSplit = mb_str_split($file); // разделил слова
// print_r($fileSplit);
$wordSum = str_word_count($file); // поиск колличества слов
foreach ($fileSplit as $value) {
    if (in_array($value, $glasnyeMas)) {
        $sum++;
    }
}
echo "Колличество гласных на странице: " . $sum . '<br>';
echo "Колличество слов: ~" . $wordSum . "<br>"; // Колличество слов
?>