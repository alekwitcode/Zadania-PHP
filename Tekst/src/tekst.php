<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Tekst
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    $tekst = "Programowanie w PHP";
    $zleSformatowyTekst = "Programowanie w PhP";
    echo strtolower($zleSformatowyTekst);
    echo '</br>';
    echo strtoupper($zleSformatowyTekst);
    echo '</br></br>';

    $krotkiTekst = 'kasztan ';
    echo str_repeat($krotkiTekst, 5);
    echo '</br>';
    $innyTekst = 'dziobak ';
    echo str_repeat($innyTekst, 15);
    echo '</br></br>';

    $tekstDoOdworcenia = "tekst";
    echo strrev($tekstDoOdworcenia);
    echo '</br>';
    $tekstDoMieszania = "Tekst do pomieszania";
    echo str_shuffle($tekstDoMieszania);
    echo '</br>';
    $tekstDoWybrania = "Pierwsza czesc, druga czesc";
    echo substr($tekstDoWybrania, 16, 20);
    echo '</br></br>';

    $tekstDoZamiany = "cytryna";
    echo str_replace("cytryna", "kiwi", $tekstDoZamiany);
    echo '</br></br>';

    $tekstDoPodzialu = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    echo $tekstDoPodzialu . '</br></br>';
    echo wordwrap($tekstDoPodzialu, 40, " TEXT </br>");
  ?>
</div>
