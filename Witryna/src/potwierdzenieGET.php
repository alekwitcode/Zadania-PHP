<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>REQUEST & GET</title>
</head>
<body>
    <?php
        $imie = urlencode($_REQUEST['fname']);
        $nazwisko = $_GET['sname'];
        $mail = $_GET['email'];

        echo $imie . '</br>' . $nazwisko . '</br>' . $mail;
    ?>
</body>
</html>