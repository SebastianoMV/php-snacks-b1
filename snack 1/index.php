<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$tappa1 = [
  [
    'casa' => 'verona',
    'ospite' => 'milan',
    'puntiCasa' => '60',
    'puntiOspite' => '50',
  ],
  [
    'casa' => 'roma',
    'ospite' => 'brescia',
    'puntiCasa' => '55',
    'puntiOspite' => '48',
  ],
  [
    'casa' => 'firenze',
    'ospite' => 'siena',
    'puntiCasa' => '58',
    'puntiOspite' => '54',
  ],
  [
    'casa' => 'bologna',
    'ospite' => 'catania',
    'puntiCasa' => '64',
    'puntiOspite' => '48',
  ],
  [
    'casa' => 'torino',
    'ospite' => 'bari',
    'puntiCasa' => '46',
    'puntiOspite' => '51',
  ],
];
var_dump($tappa1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>

<ul>
  <?php for($i = 0; $i < count($tappa1); $i++ ): ?>
    <li><?php echo $tappa1[$i]['casa'] . ' - ' . $tappa1[$i]['ospite'] .' | '. $tappa1[$i]['puntiCasa'] . ' - ' . $tappa1[$i]['puntiOspite']?></li>
  <?php endfor; ?>
</ul>


  
</body>
</html>