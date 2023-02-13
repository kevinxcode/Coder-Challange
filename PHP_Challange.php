<?php

function StringChallenge($str) {
  $remove = array(" ", "*","-","%");
  $str = strtolower(str_replace($remove, " ", $str));
  $str = strtoupper($str);
  $str = str_replace(" ", "", $str);
  // code goes here
  return $str;

}

// keep this function call here
echo StringChallenge(fgets(fopen('php://stdin', 'r')));

?>



<?php
function ArrayChallenge($arr) {
  $min = PHP_INT_MAX;
  $max = 0;
  foreach($arr as $price){
    if($price < $min){
      $min = $price;
    }else{
      $profit = $price - $min;
      if($profit > $max){
        $max = $profit;
      }
    }
  }
  // code goes here
  return $max;

}

// function findmax(array $arr){
//   $min = PHP_INT_MAX;
//   $max  = 0;
//   foreach($arr as $price){
//     if($price < $min){
//       $min = $price;
//     }else{
//       $profit = $price - $min;
//       if($profit > $max){
//         $max = $profit;
//       }
//     }
//   }
// }

// keep this function call here
echo ArrayChallenge(fgets(fopen('php://stdin', 'r')));

?>
