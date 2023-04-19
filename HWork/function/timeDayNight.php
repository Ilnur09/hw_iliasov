<?php
function timeDN() {
    $time = date('G');
    if ($time > 10 && $time < 22) {
        $time = "../style/style.css";
    } 
    else {
        $time = "../style/style_night.css";
    }
    return $time;
}
?>