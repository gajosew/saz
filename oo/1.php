<?php
  
  class Destructable
 {
     public function __construct()
    {
        echo 'Obiekt klasy Destructable został stworzony.<br/>';
     } // end __construct();
  
    public function __destruct()
    {
      echo 'Obiekt klasy Destructable został zniszczony.<br/>';
   } // end __destruct();
 } // end Destructable;
 
 $firstObject = new Destructable;
 $secondObject = new Destructable;
 unset($firstObject);
 
 echo 'Kończymy pracę...<br/>';
?>