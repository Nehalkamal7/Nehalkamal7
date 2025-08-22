<?php

class Student {
    private $name;
    private $grade;

    public function __construct($name , $grade)
    {
        $this->name = $name;
        $this->grade = $grade;
    }

    public function getname(){
        return $this->name;
    }

    public function getgrade(){
        return $this->grade;
    }

    public function setgrade($grade){
        $this->grade=$grade;
        
    

    }
}

?>