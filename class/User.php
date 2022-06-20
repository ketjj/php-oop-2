<?php

class User{
  public $name;
  public $surname;
  public $age;
  public $mail;
  public $address;
  protected $creditCard;
  protected $cardValidation; 


  public function __construct($_name, $_surname, $_age,$_creditCard){
   $this->name = $_name;
   $this->surname = $_surname;
   $this->age = $_age;
   $this->creditCard = $_creditCard;
  }

  public function userInfo(){
    echo "<strong>Name</strong>: {$this->name}<br><strong>Surname</strong>: {$this->surname}<br><strong>Age</strong>: {$this->age}<br><strong>Tipo di pagamento</strong>: {$this->creditCard}";
  }

  //SETTER

  public function setCreditCard($_card){
    $this->creditCard = $_card;
  }

  //GETTER
  public function getName(){
    return $this->name;
  }

  public function getSurname(){
    return $this->surname;
  }

  public function getAge(){
    return $this->age;
  }

  public function getCreditCard(){
    return $this->creditCard;
  }

  public function getCardVal(){
    return $this->cardValidation;
  }
  
}



?>