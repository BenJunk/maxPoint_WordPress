<?php
/*
class reverseString{
  public static function reverse($string){
    $length = strlen($string);

    for($i = ($length - 1); $i >= 0; $i--){
      echo $string[$i];
    }
  }
}

reverseString::reverse("testing123");
*/

class reverseString{
  public static $newString = array();

  public static function reverse($string){
    $length = strlen($string);

    for($i = ($length - 1); $i >= 0; $i--){
      self::$newString[] = $string[$i];
    }

    return implode(self::$newString);
  }
}

echo reverseString::reverse("testing123");
?>
