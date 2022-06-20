<?php

class User{
  private $name;
  private $surname;
  private $age;
  private $creditCard;
  private $cardValidation; 


  public function __construct($_name, $_surname, $_age){
   $this->name = $_name;
   $this->surname = $_surname;
   $this->age = $_age;
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