<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
  $alunni = [
    [
      'nome' => 'Katia',
      'cognome' => 'Perry',
      'voti' => [6, 7, 8],
    ],
    [
      'nome' => 'Gino',
      'cognome' => 'De Gini',
      'voti' => [9, 4, 8],
    ],
    [
      'nome' => 'Fabrizio',
      'cognome' => 'Frizzi',
      'voti' => [4, 6, 5],
    ],
  ];
  var_dump($alunni);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>

<?php for ($i=0; $i < count($alunni); $i++) { ?>
   <ul>
     <li><?php echo $alunni[$i]['nome'] ?></li>
     <li><?php echo $alunni[$i]['cognome'] ?></li>
     <li>Media: 
       <?php 
        $media = 0;
        for ($n=0; $n < count($alunni[$i]['voti']); $n++) {
         $media += $alunni[$i]['voti'][$n];
        } 
        $media = $media/count($alunni[$i]['voti']);
        echo $media; 
        $media = 0;
       ?>
     </li>
   </ul>
<?php } ?>
  
</body>
</html>