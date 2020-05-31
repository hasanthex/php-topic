<?php

class Books {
    private $title;

    public function setTitle($title){
        $this->title = $title;
    }

    final public function getTitle(){
        return $this->title;
    }

}

class Drawing extends Books{

    /* Fatal error: Cannot override final method Books::getTitle()  */
   
    // public function getTitle(){
    //     return 'Extended title';
    // } 

}

$book = new Drawing;
$book->setTitle('Basic Drawing');
print $book->getTitle();