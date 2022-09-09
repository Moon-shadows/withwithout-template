<?php

class Room {
    // Create properties
    public $name;
    public $size;
    public $price;

    // Create methods
    public function setName() {
      
        echo 'This is the' . $this->name;
    }
    
    public function setSize(){
       
        echo 'The room is' . $this->size;
    }

    public function setprice(){
        
        echo 'The renting price/night is' .  $this->price;
    }
 }

$room1 = new Room();

$room1->name = "Purple room";
$room1->size = "10 kvm";
$room1->price = "400 kr";
echo ($room1->setName());
echo ($room1->setSize());
echo ($room1->setPrice());


$room2 = new Room();

$room2->name = "Blue room";
$room2->size = "16 kvm";
$room2->price = "600 kr";
echo ($room2->setName());
echo ($room2->setSize());
echo ($room2->setPrice());



$room3 = new Room();

$room3->name = "Pink room";
$room3->size = "16 kvm";
$room3->price = "600 kr";
echo ($room3->setName());
echo ($room3->setSize());
echo ($room3->setPrice());
