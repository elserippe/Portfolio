<?php

/*
    Dit is de blauwdruk
    Dit noem je een Model
    Je defineert hier alle variabelen van een object
*/
class pagina {
    private $title;
    private $description;
    public $text;
    public $content;

    // De constructor wordt aangeroepen zodra je "new" aanroept. Je kan hier dus een nieuw object van het type dier mee maken.
    public function setTitle($titleParam){
        $this->title = $titleParam;
    }
    public function setDescription($descriptionParam){
        $this->description = $descriptionParam;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
}


?>