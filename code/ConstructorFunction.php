<?php

class Books {
    /* Member variables */
    var $price=100;
    var $title="Basic Physics";

    /* Constructor Function */
    function  __construct($price, $title){
        $this->price = $price;
        $this->title = $title; 
        
    }

    /* Member Functions */
    
    /* Setter Method */
    function setPrice($price){
        $this->price = $price;
    }

    function setTitle($title){
        $this->title = $title;
    }

    /* Getter Method */
    function getPrice(){
        return $this->price;
    }

    function getTitle(){
        return $this->title;
    }
}

$physics = new Books(150, 'Solid Physics');    
echo $physics->getPrice();  // Output: 150 
echo $physics->getTitle();  // Output: Solid Physics