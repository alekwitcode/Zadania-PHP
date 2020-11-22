<?php 
    if($_POST['send-nazwisko']) {
        $nazwisko = $_REQUEST['nazwisko'];
        $_SESSION['nazwisko'] = $nazwisko;
    }
    header("Location: /index.php");
?>