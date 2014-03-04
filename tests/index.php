<?php
class fizzBuzz1{
  public static $min = 1;
  public static $max = 100;
  public static $three = 3;
  public static $five = 5;

  public static function fizzBuzzCase(){
    for($i = self::$min; $i <= self::$max; $i++){
      switch($i){
        case $i % self::$three == 0 && $i % self::$five == 0:
          echo $i." - FizzBuzz <br>";
          break;
        case $i % self::$five == 0:
          echo $i." - Buzz <br>";
          break;
        case $i % self::$three == 0:
          echo $i." - Fizz <br>";
          break;
        default:
          echo $i." - nothing <br>";
          break;
      }
    }
  }
}

// fizzBuzz1::fizzBuzzCase();

class fizzBuzz2{
  private $min = 1;
  private $max = 100;
  private $three = 3;
  private $five = 5;

  public function fizzBuzzIfElse(){
    for ($i = $this->min; $i <= $this->max; $i++){
      if($i % $this->three == 0 && $i % $this->five == 0){
        echo $i." - FizzBuzz <br>";
      } elseif($i % $this->five == 0){
        echo $i." - Buzz <br>";
      } elseif($i % $this->three == 0){
        echo $i." - Fizz <br>";
      } else {
        echo $i." - nothing <br>";
      }
    }
  }

  public function fizzBuzzTest($number){
    switch($number){
      case $number % $this->three == 0 && $number % $this->five == 0:
        echo $number." - fizzBuzz <br>";
        break;
      case $number % $this->three == 0:
        echo $number." - buzz <br>";
        break;
      case $number % $this->five == 0;
        echo $number." - fizz <br>";
        break;
      default:
        echo $number." - nothing <br>";
        break;
    }
  }

  public static function fizzBuzzCase(){
    for($i = $this->min; $i <= $this->max; $i++){
      switch($i){
        case $i % $this->three == 0 && $i % $this->five == 0:
          echo $i." - FizzBuzz <br>";
          break;
        case $i % $this->five == 0:
          echo $i." - Buzz <br>";
          break;
        case $i % $this->three == 0:
          echo $i." - Fizz <br>";
          break;
        default:
          echo $i." - nothing <br>";
          break;
      }
    }
  }
}

// $fizzBuzz = new FizzBuzz2();
// $fizzBuzz->fizzBuzzIfElse();
// $fizzBuzz->fizzBuzzCase();

echo strrev("dickanus");
?>
