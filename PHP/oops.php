<?php

// From PHP5 onwards you can write PHP in either a procedural or object oriented way,
// OOP consists of classes that can hold properties and methods. objects can be created from the class.

class User{
    public $name;
    public $email;
    public $password;

 public function __construct($name,$email,$password){
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    // echo 'constructor running';
 }

    // Method is a function that belongs to the class.
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

}

 $u1 = new User("Mike","mikedg23@gmail.com","mike233@");
 $u2 = new User("Prajwal","prajwalc129@hmail.com","code56#@");
//  var_dump($u1);

//  $u1->name = "Prajwal" . '<br>';
//  var_dump($u1) . '<br>';

//  $u2->set_name('Mike');
//  var_dump($u2) . '<br>';

//  echo $u1->get_name();
//  echo $u2->get_name();

// echo $u1->email, '<br>';
// echo $u2->name, '<br>';

// Inheritance:
// class Employee extends User{
//     public function __construct($name,$email,$password,$title){
//         parent::__construct($name,$email,$password);
//         $this->$title = $title;
//     }

//     public function get_title(){
//         return $this->title;
//     }
// }

// $e1 = new Employee("Jeff","jeffmel45@gmail.com","jeff6737@","GET");
// echo $e1->get_title();


?>