<?php 
$phpCourse = isset($_POST['login']) ? $_POST['login'] : 1;
// file_put_contents('/OpenServer/userdata/temp/email/labMailComments.txt', $allData , FILE_APPEND);

$mail = isset($_POST['email']) ? $_POST['email'] : 'Почта ';
$comment = isset($_POST['comment']) ? $_POST['comment'] : 'Комментарий ';
$mail = htmlspecialchars($mail);
$comment = htmlspecialchars($comment);

mail($mail, 'Date', $comment);