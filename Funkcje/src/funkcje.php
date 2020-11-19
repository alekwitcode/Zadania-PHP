<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  <h3>Funkcje</h3>
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    function pierwszaFunkcja() {
      echo 'Wiadomosc z pierwszej funkcji' . '</br>';
    }
    pierwszaFunkcja();
    echo '</br>';

    function funkcjaZArgumentami($imie, $nazwisko = 'Nowak') {
      echo 'Hello ' . $imie . ' ' . $nazwisko . '</br>';
    }

    funkcjaZArgumentami(Jan);
    funkcjaZArgumentami(Aleksander, Witocha);
    echo '</br>';

    $imieDoRefenecji = 'Alek';
    function funkcjaZReferencja(&$imie) {
      $imie = 'Olek';
    }

    echo $imieDoRefenecji . '</br>';
    funkcjaZReferencja($imieDoRefenecji);
    echo $imieDoRefenecji;
    echo '</br></br>';

    function funkcjaZNieznanaLiczbaArgumentow() {
      $numargs = func_num_args();
      $counter = 1;
      for ($i = 0; $i < $numargs; $i++) {
        echo 'Arg ' . $counter . ': ' . func_get_arg($i) . '</br>';
        $counter++;
      }
    }

    funkcjaZNieznanaLiczbaArgumentow("Jabłko", "Gruszka", "Banan");

  ?>
</div>
