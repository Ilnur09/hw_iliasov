<?php
function user(){
    if(!empty($_POST['registration_login'])){
        $_COOKIE['User'] = $_POST['registration_login'];
        $registrationLogin = $_COOKIE['User'];
        setcookie('registration_login', $registrationLogin, time()+3600*60*30*24, '/');
        return "<h4>Добро пожаловать " . $registrationLogin . "</h4>";
    }
    else {
        setcookie('registration_login', 'User');
    }
}
?>