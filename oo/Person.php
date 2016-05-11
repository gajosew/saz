<?php
 2 class Person
 3 {
 4    public $name;
 5    public $surname;
 6                 
 7    public function setFullName($name, $surname)
 8    {
 9       $this->name = $name;
10       $this->surname = $surname;
11    } // end setFullName();
12                 
13    public function getFullName()
14    {
15       return $this->name.' '.$this->surname;               
16    } // end getFullName();  
17 }
?>

