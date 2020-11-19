<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>POST</title>
</head>
<body>
    <?php
      if($_POST['zatwierdz']) {
          $imie = urlencode($_REQUEST['fname']);
          $nazwisko = $_POST['sname'];
          $mail = $_POST['email'];

          echo $imie . '</br>' . $nazwisko . '</br>' . $mail;
      }
    ?>
</body>
</html>