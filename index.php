<?php 

require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/MemberUser.php';
require_once __DIR__ . '/class/Prodotto.php';

//DEFINE OBJECTS
$user1 = new User('John', 'Smith', 30,'MasterCard');
$MemberUser1 = new MemberUser('Jane','Low', 26, 'visa');


//Prodotti
$prod1 = new Toy(012334,'kong',8.99,1,'masticare','caucciù');

$prod2 = new Food (23344,'Pedigree-Vital', 43.99, 1, 20.000, 25, ['manzo']);
$prod2->addIngredient('verdure');

$prod3 = new Toy(012334,'kong',8.99,1,'masticare','caucciù');

var_dump($MemberUser1);

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
    <h3 class="text-uppercase">Utente</h3>
    <div><?php echo $user1->userInfo() ?></div>

  </div>

  <div class="container">
    
    <h4><?php echo $userRegistered->userInfo() ?></h4>

  </div>

 

</body>
</html>

