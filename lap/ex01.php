<?php
class StudentD17{
    public $name = "Viet dung";
    private $age =21;
    public function getInfo(){
         echo $this -> name;
         echo $this ->age;

    }
}
$objSv =new StudentD17;
echo $objSv ->name;
class Student extends StudentD17 {
    function getName(){
        echo $this ->name;

    }
}
