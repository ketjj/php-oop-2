<?php

class User{
  private $name;
  private $surname;
  private $email;
  private $address;
  private $basket;
  protected $creditCard;
  protected $cardValidation; 


  public function __construct($_name, $_surname, $_age,$_email, $_address){
   $this->name = $_name;
   $this->surname = $_surname;
   $this->age = $_age;
   $this->email = $_email;
   $this->address = $_address;
  }

  public function userInfo(){
    echo "<strong>Name</strong>: {$this->name}<br><strong>Surname</strong>: {$this->surname}<br><strong>Age</strong>: {$this->age}<br><strong>Mail</strong>: {$this->email}<br><strong>Address</strong>: {$this->address}";
  }

  public function sumPrice(){
    $tot = 0;
    foreach($this->basket as $el){
      $tot += $el->getPrice();
    }
    return $tot;
  }

  public function buyPermision(){
    $msg = '';

    if(is_null($this->creditCard)){
      $msg = 'La carta non è presente, non puoi comprare';
    }else if($this->cardValidation < date("Y/m/d")){
      $msg = 'La carta è scaduta, non puoi comprare';
    } else{
      $msg = 'Buon acquisto!';
    }
    return $msg;
  }

  public function addToBasket($_basket){
    $this->basket[] = $_basket;
  }

  //SETTER
  public function setName($_name){
    $this->name = $_name;
  }
  public function setSurname($_surname){
    $this->surname = $_surname;
  }
  public function setMail($_mail){
    $this->mail = $_mail;
  }
  public function setAddress($_address){
    $this->address = $_address;
  }
  public function setBasket($_basket){
    $this->basket = $_basket;
  }
  public function setCreditCard($_card){
    if($_card > 0){
      $this->creditCard = $_card;
    }else{
      echo 'Carda non identificata';
    }
  }
  public function setValidCard($_valid){
    $this->cardValidation = $_valid;
  }

  //GETTER
  public function getName(){
    return $this->name;
  }

  public function getSurname(){
    return $this->surname;
  }

  public function getMail(){
    return $this->mail;
  }
  public function getAddress(){
    return $this->address;
  }

  public function getBasket(){
    return $this->basket;
  }

  public function getCreditCard(){
    return $this->creditCard;
  }

  public function getCardVal(){
    return $this->cardValidation;
  }
  
}



?>