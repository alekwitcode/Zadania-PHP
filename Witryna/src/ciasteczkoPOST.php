
<?php
    $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
    if($_POST['send-imie']) {
        $cookie_value = $_POST['imie'];
        setcookie('imie', $cookie_value, time()+60*60*24*30, '/', $domain, false);
    }
    header("Location: http://localhost:8089/");
?>