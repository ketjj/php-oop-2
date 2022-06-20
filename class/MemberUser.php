<?php
  require_once __DIR__ . '/User.php';

  class MemberUser extends User {
    
    private $discount = 20;
    
    public function getDiscount(){
      return $this->discount;
    }
    public function setDiscount($_discount){
      $this->discount = $_discount;

    }

  }

?>