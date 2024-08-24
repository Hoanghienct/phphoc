<?php
class Employee{
    private $name = "hoàng <br>";
    private $age = "10 <br>";
    private $address = "Hà nội <br>";
    public $phone ="0123456789 <br>";
    public $class ="d17 <br>";

    public function nv(){
        echo"Name :". $this -> name ;
        echo "Age :".$this ->age;
        echo "Address :".$this -> address;
        echo "Phone :".$this -> phone;
        echo"class :". $this -> class; 
    }
}


$objSv =new Employee;

echo $objSv ->nv();
?>