<?php
  require_once __DIR__ . '/User.php';

  class RegUser extends User {
    private $discount;

    public function getDiscount(){
      return $this->discount;
    }
  }

?>