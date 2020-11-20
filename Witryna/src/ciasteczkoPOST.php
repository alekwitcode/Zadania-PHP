<?php
    if(isset($_POST['send-imie'])) {
        $cookie_value = $_POST['imie'];
        setcookie('imie', $cookie_value, time()+60*60*24*30, '/', 'localhost');
    }
    header("Location: ./index.php");
?>
