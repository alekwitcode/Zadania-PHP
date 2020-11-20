<?php 
    session_start();
    
    if($_POST['send-nazwisko']) {
        $nazwisko = $_REQUEST['nazwisko'];
        $_SESSION['nazwisko'] = $nazwisko;
    }
    header("Location: http://localhost:8089/");
?>