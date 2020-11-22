<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="/src/css/styles.css" rel="stylesheet">

  <title>Składowe witryny</title>
</head>
<body>
    <h1 style="text-align: center"> Składowe witryny </h1>
<div class="row-wrapper">
    <div class="form-wrapper">
        <form action="/src/potwierdzenieGET.php" method="GET">
            <h4 class="form-title">metoda GET</h4>
            <label for="fname"><b>Imię: </label></b></br>
            <input type="text" id="fname" name="fname"></input></br></br>
            <label for="sname"><b>Nazwisko: </label></b></br>
            <input type="text" id="sname" name="sname"></input></br></br>  
            <label for="email"><b>E-mail: </label></b></br>
            <input type="text" id="email" name="email"></input></br></br>
            <div class="send-wrapper">
                <input type="submit" class="send" id="submitGET" value="zatwierdzenie" name="zatwierdz">
            </div>
        </form>
    </div>
    <div class="form-wrapper">
        <form action="/src/potwierdzeniePOST.php" method="POST">
            <h4 class="form-title">metoda POST</h4>
            <label for="fname"><b>Imię: </label></b></br>
            <input type="text" id="fname" name="fname"></input></br></br>
            <label for="sname"><b>Nazwisko: </label></b></br>
            <input type="text" id="sname" name="sname"></input></br></br>
            <label for="email"><b>E-mail: </label></b></br>
            <input type="text" id="email" name="email"></input></br></br>
            <div class="send-wrapper">
                <input type="submit" class="send" id="submitPOST" value="zatwierdzenie" name="zatwierdz">
            </div>
        </form>
    </div>
</div>
    </br></br>

<div class="row-wrapper">
    <div class="form-wrapper">
        <form action="/src/ciasteczkoPOST.php" method="POST">
            <h4 class="form-title">Ciasteczko</h4>
            <label for="imie"><b>Imie: </b></label></br>
            <input type="text" id="imie" name="imie"></input></br></br>
            <div class="send-wrapper">    
                <input type="submit" class="send" id="submitCookiePOST" value="Send-imie" name="send-imie">
            </div> 
        </form>
    </div>
    <div class="form-wrapper">
        <form action="/src/sesjaPOST.php" method="POST">
            <h4 class="form-title">Sesja</h4>
            <label for="nazwisko"><b>Nazwisko: </b></label></br>
            <input type="text" id="nazwisko" name="nazwisko"></input></br></br>
            <div class="send-wrapper">
                <input type="submit" class="send" id="submitSessionPOST" value="Send-nazwisko" name="send-nazwisko">
            </div>
        </form>
    </div>
</div>

</br></br>

<div class="text-wrapper">
    <div class="text-div">
        <p> 
            <b>Ciasteczko dla klucza "imie" to: </b>  
            <?php
                include 'src/ciasteczko.php';
            ?>
        </p>
    </div>

    </br></br>

    <div class="text-div">
        <p>
            <b>Sesja dla klucza "nazwisko" to: </b>
            <?php
                session_start(); 
                include 'src/sesja.php';
            ?>
        </p>
    </div>
</div>
</body>
</html>