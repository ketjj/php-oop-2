<?php 

require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/RegUser.php';

//DEFINE OBJECTS
$user1 = new User('John', 'Doe', 30,'MasterCard');

$userRegistered = new RegUser('Jane','Doe', 20, 'Visa');


// var_dump($user1);
//  echo "<br>";
// var_dump($userRegistered);


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
    <h1><?php echo $user1->getName() ?> <?php echo $user1->getSurname() ?></h1>
    <p><?php echo "Età:".' '.$user1->getAge() ?></p>

  </div>

  <div class="container">
    <h1><?php echo $userRegistered->getName() ?> <?php echo $userRegistered->getSurname() ?></h1>
    <p><?php echo "Età:".' '.$userRegistered->getAge() ?></p>

  </div>

 

</body>
</html>

