<?php

class BaseElement{
    private $title;
    public $description;
    public $visible;
    public $months;

    public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        if($title == ''){
            $this->title = 'N/A';
        }else {
            $this->title = $title;
        }

    }

    public function getDurationAsString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        if($years == 0){
          return "$extraMonths months";
        }else if($years > 0){
          return "$years years $extraMonths months";
        }
      }
}