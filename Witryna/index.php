<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Składowe witryny</title>
</head>
<body>
    <form action="/src/potwierdzenieGET.php" method="GET">
        <h4>metoda GET</h4>
        <label for="fname"><b>Imię: </label></b>
        <input type="text" id="fname" name="fname"></input></br>
        <label for="sname"><b>Nazwisko: </label></b>
        <input type="text" id="sname" name="sname"></input></br>   
        <label for="email"><b>E-mail: </label></b>
        <input type="text" id="email" name="email"></input></br>

        <input type="submit" id="submit" value="zatwierdzenie" name="zatwierdz">
    </form>

    <form action="/src/potwierdzeniePOST.php" method="POST">
        <h4>metoda POST</h4>
        <label for="fname"><b>Imię: </label></b>
        <input type="text" id="fname" name="fname"></input></br>
        <label for="sname"><b>Nazwisko: </label></b>
        <input type="text" id="sname" name="sname"></input></br>   
        <label for="email"><b>E-mail: </label></b>
        <input type="text" id="email" name="email"></input></br>

        <input type="submit" id="submit" value="zatwierdzenie" name="zatwierdz">
    </form>
    </br></br>

    <form action="/src/ciasteczkoPOST.php" method="POST">
        <h4>Ciasteczko</4>
        <label for="imie"><b>Imie: </b></label>
        <input type="text" id="imie" name="imie"></imput></br>
        <input type="submit" id="submit" value="send" name="send">
    </form>
    </br></br>
    
    <?php
        include 'src/ciasteczko.php';
    ?>
</body>
</html>