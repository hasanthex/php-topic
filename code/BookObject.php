<?php

class BookObject {
    /* Member variables */
    var $price;
    var $title;

    /* Member Functions */
    
    /* Setter Method */
    function setPrice($price){
        $this->price = $price;
    }

    function setTitle($title){
        $this->title = $title;
    }

    /* Geter Method */
    function getPrice(){
        return $this->price;
    }

    function getTitle(){
        return $this->title;
    }
}

$books = new Books;