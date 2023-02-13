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

Here's a PHP function that returns the maximum possible profit that can be made by buying and selling a stock at the right time, given an array of stock prices:
For example: if arr is [44, 30, 24, 32, 35, 30, 40, 38, 15] then your program should return 16 because at index 2 the stock was worth $24 and at index 6 the stock was then worth $40, so if you bought the stock at 24 and sold it at 40, you would have made a profit of $16
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
