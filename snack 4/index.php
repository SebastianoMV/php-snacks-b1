<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$numeri = [];
function numeriRandom($min, $max, $n){

  $numeriArr = [];

  while (count($numeriArr) < $n){
    $numeroRand = rand($min, $max);
    if(!in_array($numeroRand, $numeriArr)){
      $numeriArr[] = $numeroRand;
    }
  }
  return $numeriArr;
}

$numeri = numeriRandom(1, 100 ,15);
var_dump($numeri);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>