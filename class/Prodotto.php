<?php
class Product {
  private $number;
  private $name;
  private $price;
  private $quantity;
  //public $description;

  public function __construct($_number,$_name, $_price, $_quantity){
    $this->number = $_number;
    $this->name = $_name;
    $this->price = $_price;
    $this->quantity = $_quantity;
  }
  
  public function getInfo(){
    echo "<strong>Name</strong>: {$this->name}<br><strong>Number</strong>: {$this->number}<br><strong>Price</strong>: {$this->price} &euro; <br><strong>Quantity</strong>: {$this->quantity}";
  }
  //SETTER

  public function setNumber($_number){
    $this->number = $_number;
  }

  public function setName($_name){
    $this->name = $_name;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setQuantity($_quantity){
    $this->quantity = $_quantity;
  }

  //GETTER

  public function getNumber(){
    return $this->number;
  }
  public function getName(){
    return $this->name;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getQuantity(){
    return $this->quantity;
  }


}

// ------------TOY---------------

class Toy extends Product{
  private $type;
  private $material;
  private $category;

  public function __construct($_number,$_name, $_price, $_quantity, $_type, $_material, $_category){
    parent::__construct($_number,$_name, $_price, $_quantity);
    $this->type = $_type;
    $this->material = $_material;
    $this->category = $_category;
  }
  public function getInfo(){
    parent::getInfo();
    echo "<br><strong>Material</strong>: {$this->material}
    <br><strong>Material</strong>: {$this->material}
    <br><strong>Category</strong>: {$this->category}";
  }

  public function setType($_type){
   $this->type = $_type;
  }
  public function setMaterial($_material){
    $this->material = $_material;
   }

  public function getType(){
    return $this->type;
  }
  public function getMaterial(){
    return $this->material;
  }
}

// ------------FOOD---------------

class Food extends Product{
  private $calories;
  private $weight;
  private $ingredients;

  public function __construct($_number,$_name, $_price, $_quantity,$_calories, $_weight){
    parent::__construct($_number,$_name, $_price, $_quantity);
    $this->calories = $_calories;
    $this->weight = $_weight;
   
  }
    public function getInfo(){
    parent::getInfo();
    echo "<br><strong>Weight</strong>: {$this->weight}<br><strong>Calories</strong>: {$this->calories}";
  }
  //SETTER

  public function setCalories($_calories){
    $this->calories = $_calories;
   }
   public function setWeight($_weight){
    $this->weight = $_weight;
   }

   public function setIngredients($_ingredients){
    $this->ingredients = $_ingredients;
   }
   public function addIngredient($_ingredient){
    $this->ingredients[] = $_ingredient;
   }
   
  //GETTER

  public function getCalories(){
    return $this->calories;
  }
  public function getWeight(){
    return $this->weight;
  }
  public function getIngredients(){
    return $this->ingredients;
  }
}

// ------------OTHER---------------

class Other extends Product{
  private $description;
  private $note;

  public function __construct($_number,$_name, $_price, $_quantity, $_description, $_note){
    parent::__construct($_number,$_name, $_price, $_quantity);
    $this->description = $_description;
    $this->note = $_note;
  }

  public function setDescription($_description){
    $this->description = $_description;
  }
  public function setNote($_note){
    $this->note = $_note;
  }

  public function getDescription(){
    return $this->description;
  }
  public function getNote(){
    return $this->note;
  }
}
?>