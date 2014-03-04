<?php
class factorialClass {
  public function factorial($number){
    $x = 1;

    for($i = 1; $i <= $number; $i++){
      $x = $i * $x;
    }

    return $x;
  }
}

$test = new factorialClass();
echo $test->factorial(8);
?>
