<?php 

require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/MemberUser.php';
require_once __DIR__ . '/class/Prodotto.php';

//DEFINE OBJECTS
$user1 = new User('John', 'Smith',30, 'john.smith@gmail.com', 'Downtown Str.1');
$user1->setCreditCard('326763826826');
$user1->setValidCard('2025/02/12');


$user2 = new User('Paul', 'James',44, 'paul_pauly@gmail.com', 'Main Str.10');
$user2->setCreditCard('2178127817');
$user2->setValidCard('2020/02/14');


$MemberUser1 = new MemberUser('Megan','Low', 26, 'megan_low@yahoo.com', 'Uptown Str.23');
$MemberUser1->setCreditCard('243457658856');
$MemberUser1->setValidCard('2023/03/25');


$MemberUser2 = new MemberUser('Henry','Ford', 52, 'ford@yahoo.com', 'Jump St.21');




$allUsers = [$user1,$user2,$MemberUser1,$MemberUser2];
//Prodotti
$prod1 = new Toy(012334,'kong',8.99,1,'masticare','caucciù', 'Dog');

$prod2 = new Food (23344,'Pedigree-Vital', 43.99, 1, 20.000, 25, ['manzo']);
$prod2->addIngredient('verdure');

$prod3 = new Food( 012334,'Pedigree-Dentix',35, 1, 15.000,15, ['pollo','verdure']);

$prod4 = new Toy(57485648,'Chew Chicken Osso',10.99,1,'masticare',' le fibre', 'Dog');

$prod5 = new Toy(3456678,'Squeaky Ball',8.99,1,'masticare','TPR', 'Dog');



$user1->addToBasket($prod3);
$user1->addToBasket($prod5);
$user2->addToBasket($prod2);
$MemberUser1->addToBasket($prod4);
$MemberUser1->addToBasket($prod3);
$MemberUser2->addToBasket($prod1);


// echo "<br>";
// echo "<br>";
// var_dump($prod2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Oop-2</title>
</head>
<body>
  <div class="container my-4">
    <h4 class="text-uppercase pr-5">Utente/Acquisto</h4>
    <?php foreach($allUsers as $s_user) : ?>
      <div class ="my-3 border-bottom pb-3 d-flex ">
        <div class="pr-5"><?php $s_user-> userInfo(); ?></div>        
        <div>
          <ul>
            Carrello: 
            <?php foreach($s_user->getBasket() as $el) : ?>
              <li class="py-3"><?php echo $el->getInfo(); ?></li>
            <?php endforeach;?>
            <strong>Tot spesa: </strong> <?php echo $s_user->sumPrice() .' '.'&euro;'?><br>
            <strong>Buy Message: </strong><?php echo $s_user->buyPermision() ?>
          </ul>
        </div>
      </div>
     
      <?php endforeach; ?>


  </div>



 

</body>
</html>

