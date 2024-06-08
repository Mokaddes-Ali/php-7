<?php
//here write a normal function
function greet ($message){
    echo "Hello Laraval Developer" . $message;
}
greet("\nMokaddes Ali");
echo "</br>\n";

//here write a class and method
class Greeting {
    function greet($message){
        echo "Hello React Developer" . $message;
    }
}
$Greeting = new Greeting();
$Greeting ->greet("Ali");
echo "</br>\n";
//Public property 
class User{
    public $name;
    
    public function setName($newname){
        $this->name = $newname;
    }
    public function getName(){
        echo "Hello Developer ". $this->name;
    }
}
$user1 = new User();
$user1 ->setName("Mokaddes Ali");
$user1 ->getName();
echo "</br>\n";
//Two variable without passing parameter public  property

class User2{
    public $name;
    public $age;
    
    public function setName1(){
        echo "Person name is". $this->name;
    }
    public function setAge(){
        echo "\nHis age is: ". $this->age;
    }
}
$personOne = new User2();
$personOne -> name = "John";
$personOne -> age = "20";

$personOne -> setName1();

$personOne -> setAge();