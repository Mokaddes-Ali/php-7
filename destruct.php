<?php
class Person {
    public $name ;

    public $age ;
    public $id ;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function setId($id){
         $this-> id = $id;
    }

    Public function __destruct(){
        if(!empty($this->id)){
            echo "\n saving person";
    }
}

    public function personDetails(){
        echo "\n Person Name  is : {$this->name} and age is : {$this->age}";
        
    }

}
$personOne = new Person("Mokaddes", 25);
$personOne -> personDetails();
$personOne -> setId(13);