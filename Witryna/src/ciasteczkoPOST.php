<?php
    if($_POST['send-imie']) {
        $cookie_name = 'imie';
        $cookie_value = $_POST['imie'];
        setcookie($cookie_name, $cookie_value, time()+60*60*24*30, '/');
    }
    header("Location: /index.php");
?>