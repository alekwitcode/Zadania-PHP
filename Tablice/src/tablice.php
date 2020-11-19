<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  <h3>Tablice</h3>
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    $tablica = ["pierwszy", "drugi", "czwarty"];
    echo $tablica[1];
    echo '</br></br>';

    foreach($tablica as $word) {
      echo $word . ' ';
    }
    echo '</br></br>';

    print_r($tablica);
    echo '</br>';

    echo 'Ilość elementów to: ' . count($tablica);
    echo '</br></br>';

    $nowaTablica = ["klucz1" => "warość1", "klucz2" => "wartość2"];
    
    echo $nowaTablica["klucz1"];
    echo '</br>';

    $nowaTablica["klucz1"] = "innaWartość";
    echo $nowaTablica["klucz1"];
    echo '</br></br>';

    $nowaTablica = array_reverse($nowaTablica);
    print_r($nowaTablica);
    echo '</br></br>';

    function sprawdzCzyJest($wartoscSzukana, $tablica) {
      if (in_array($wartoscSzukana, $tablica)) {
        echo 'Jest';
        echo '</br>';
      } else {
        echo 'Nie ma';
        echo '</br>';
      }
    }

    sprawdzCzyJest('wartość2', $nowaTablica);
    sprawdzCzyJest('wartość1', $nowaTablica);

    $imiona = ['Jan', 'Monika', 'Dominik', 'Patryk'];
    natcasesort($imiona);
    print_r($imiona);
    echo '</br></br>';

    $tablicaLiczbowa = [1, 2, 4, 9, 8, 7, 6];
    rsort($tablicaLiczbowa);
    print_r($tablicaLiczbowa);
    echo '</br></br>';

    shuffle($tablicaLiczbowa);
    print_r($tablicaLiczbowa);
    echo '</br></br>';

    $owoce = [ 
      'a' => 'ananas', 
      'b' => 'banan', 
      'c' => 'cytryna'
    ];

    $warzywa = [
      'm' => 'marchew', 
      'z' => 'ziemniak'
    ];
    print_r(array_merge($owoce, $warzywa));
    echo '</br></br>';

    $male = ['wszytkie', 'te', 'slowa', 'sa', 'wielkimi', 'literami'];
    echo '</br>';
    $duze = array_map('strtoupper', $male);
    print_r($duze);

  ?>
</div>
