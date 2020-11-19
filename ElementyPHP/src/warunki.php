
<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  <h3>Warunki</h3>
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  $liczba = 8;
  $liczbaInna = 10;

    if ($liczba < 10) {
        echo 'True';
    }

    if ($liczbaInna < 10) {
        echo 'Mniejsze niz 10' . '</br>';
    } elseif ($liczbaInna == 10){
        echo 'Równe do 10' . '</br>';
    } else {
    echo 'Musi byc wieksze niz 10' . '</br>';
    }

    switch ($liczba) {
        case 7:
            echo 'To musi byc siedem!';
        break;
        case 8:
            echo 'To musi byc osiem!';
        break;
        case 9:
            echo 'To musi byc dziewięć!';
        break;
    }
  ?>
</div>
