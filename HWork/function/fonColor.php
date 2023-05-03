<?php
function FonColor()
{
    // setcookie('color', ' ', time() + 3600 * 60 * 24 * 30);
    if (isset($_POST['color'])) {
        $_COOKIE['color'] = $_POST['color'];
        setcookie('color', $_COOKIE['color'], time() + 3600 * 60 * 24);
    } else {
        setcookie('color', '#000000', time() + 3600 * 60 * 24);
    }
    
    $colorBodyForm = $_COOKIE['color'];
    echo $colorBodyForm;
}
?>