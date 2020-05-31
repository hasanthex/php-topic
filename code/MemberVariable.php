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

echo $physics->price;   // Output: 100
echo $physics->title;   // Output: Basic Physics