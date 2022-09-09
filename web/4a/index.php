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

    public function price(){
        
        echo 'The renting price/night is' .  $this->price;
    }
 }

