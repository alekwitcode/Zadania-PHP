<?php 
    if (!isset($_COOKIE['imie'])) {
        echo 'Ciasteczko o nazwie "imie" nie jest ustawione';
    } else {
        echo 'Wartość ciasteczka "imie" to ' . $_COOKIE['imie'];
    }
?>