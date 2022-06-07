<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
 $paragrafo= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptatibus quam ab earum, amet veritatis culpa, mollitia suscipit sunt cumque exercitationem doloribus iste officia sequi aperiam libero? Ex, a voluptate! Maxime impedit sapiente molestias repellendus, illum maiores. Dicta, reiciendis. Quia perferendis ea veniam dolore recusandae, eius libero, reprehenderit expedita excepturi nesciunt facere et tenetur in temporibus qui cumque numquam iste commodi non delectus neque magni est! Culpa possimus laboriosam iusto numquam beatae adipisci reiciendis corporis animi porro totam perspiciatis in dolorem at similique ex, dolore hic neque pariatur reprehenderit est velit nihil. Neque fugit corporis incidunt quibusdam dolor nihil minima distinctio placeat nisi dolorum obcaecati, reprehenderit quos, omnis eum deleniti. Placeat ipsa magni temporibus, dicta repellendus fuga sint blanditiis. Quaerat commodi nisi mollitia fuga consectetur eveniet quibusdam voluptate maiores modi. Voluptate non molestias sit minima earum facilis voluptatum animi! Necessitatibus nulla modi rem cum veritatis eius vitae molestiae. Ipsa commodi harum corrupti quisquam quaerat, nobis unde consequuntur odit rem possimus sit ex at in doloribus excepturi omnis, adipisci quibusdam mollitia iste aut, nulla inventore incidunt ipsam tenetur! Alias nemo incidunt nobis voluptas doloribus deleniti provident aspernatur! Cum recusandae fugiat id accusamus repellat, quis repellendus ad maiores quia vitae ipsam voluptas sed, obcaecati, voluptatum ea tenetur. Perferendis beatae voluptatem modi ex quaerat quo dolorem corrupti ad necessitatibus minima aliquid magnam accusamus, minus odio cum repudiandae id assumenda libero, sapiente aut. Neque fugiat, nam delectus error ea at quos laboriosam quam accusamus reiciendis molestias sequi non cum eaque aut quidem tenetur consequuntur repudiandae vero? Nesciunt esse eum tempore, voluptates, cumque commodi et ipsa molestiae, perspiciatis nemo reiciendis aspernatur vel praesentium inventore exercitationem sunt neque ad accusamus magni itaque minus molestias ratione! Doloremque non dolorem asperiores porro alias exercitationem aliquid? Obcaecati consectetur architecto earum repellat delectus voluptatibus ipsa harum, consequatur error cumque nostrum sequi ducimus molestias tenetur perspiciatis possimus quibusdam deserunt illum, cum voluptas dolorum ad? In ipsa, eaque optio, fuga atque debitis placeat architecto alias harum, dolorum laborum. Inventore aut odio consectetur suscipit velit? Et, illo? Consequatur non similique neque dolores doloribus nam laudantium, aliquid ab, accusantium cupiditate dolore esse ipsum ducimus tenetur rem commodi deleniti. Autem perspiciatis consectetur saepe, possimus veritatis, dolorem sapiente reprehenderit ipsam quam, amet vero cumque officiis. Excepturi suscipit officia blanditiis minus vel, esse aliquid, laboriosam corporis repudiandae nisi id est natus sint quidem similique a molestias expedita quasi odit? Dignissimos pariatur sint dolor repudiandae atque exercitationem quos adipisci, ducimus explicabo reprehenderit nihil, deleniti eveniet laudantium ab omnis amet itaque cupiditate cum asperiores in, quisquam quo placeat aut voluptate? Reprehenderit accusamus incidunt beatae dolorem amet sit? Aperiam, commodi eos. Odio aspernatur maxime commodi praesentium sunt dolore ut illum eligendi quibusdam laboriosam eveniet atque ullam ducimus assumenda provident facilis, iste error ipsa eius. Cum voluptatem magni consectetur nesciunt facere delectus quas doloremque sapiente, accusantium nam et cumque minima, eligendi exercitationem eius? Quisquam excepturi qui laborum hic laboriosam veritatis necessitatibus architecto, maiores maxime corporis? Similique, vitae beatae! Quam magni laborum non qui deserunt suscipit temporibus quibusdam, eaque sapiente at sint!";

 $paragrafi = explode('.', $paragrafo);
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
  <p> <?php echo $paragrafo ?></p>
  <ul>
    <?php for($i = 0; $i < count($paragrafi); $i++): ?>
      <li> <?php echo $paragrafi[$i] ?></li>
    <?php endfor; ?>
  </ul>
</body>
</html>