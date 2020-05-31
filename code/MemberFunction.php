<?php

class Books {
    /* Member variables */
    var $price=100;
    var $title="Basic Physics";

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

$physics = new Books;    
$physics->setPrice(100);  
$physics->getPrice();   // Output: 100