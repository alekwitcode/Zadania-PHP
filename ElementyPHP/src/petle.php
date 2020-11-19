<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  <h3>Pętle</h3>
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  for ($i = 0; $i<=10; $i++) {
      echo $i . " ";
  }

  echo '</br>';

  $i=0;
  $j=5;

  while ($i*$j<50) {
      echo $i*$j . " ";
      $i++;
      $j++;
  }
  ?>
</div>
