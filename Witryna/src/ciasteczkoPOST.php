<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>COOKIE POST</title>
</head>
<body>
    <?php
        $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
        if($_POST['send']) {
            $cookie_value = $_POST['imie'];
            setcookie('imie', $cookie_value, time()+60*60*24*30, '/', $domain, false);
        }
        
        header("Location: http://localhost:8089/");
    ?>
</body>
</html>