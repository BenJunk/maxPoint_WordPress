<?php
function even(){
  do {
    $a = mt_rand(0, 20);

    if ($a % 2 != 0) {
        continue;
    }

    break;
  } 

  while (1);

  return $a;
}

for ($i = 0; $i < 10; $i++) {
  echo even(), PHP_EOL;
}
?>
