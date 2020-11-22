
<?php
    if(isset($_SERVER['HTTP_HOST'])) $domain = $_SERVER['HTTP_HOST'];
    if($_POST['send-imie']) {
        $cookie_name = 'imie';
        $cookie_value = $_POST['imie'];
        setcookie($cookie_name, $cookie_value, time()+60*60*24*30, '/', $domain, false);
    }
    header("Location: /index.php");
?>