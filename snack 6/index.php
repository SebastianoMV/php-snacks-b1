<?php

$db = [
  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6</title>
  <style>

    .box{
      width: 300px;
      height: 200px;
      display: inline-block;

    }
    .teachers{
      background-color: green;  
    }

    .pm{
      background-color: gray;
    }
  </style>
</head>
<body>


<?php foreach ($db as $role => $values): ?>
  <div class="box <?php echo $role ?>">
    <?php foreach ($values as $value): ?>
      <div>
        <?php echo $value['name'] .'  '. $value['lastname']?>
      </div>
    <?php endforeach; ?>
  </div>
<?php endforeach; ?>


  
</body>
</html>