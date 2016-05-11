<?php
  
  class ConfigLoader
  {
    private $_fileName = '';
 
     public function setFilename($filename)
     {
       $this->_fileName = $filename;
    } // end setFilename();
 
    public function load()
    {
       if(file_exists($this->_fileName))
       {
          return parse_ini_file($this->_fileName);
       }
 
       // jeśli pliku nie ma, zwróć pustą tablicę
       return array();
    } // end load();
 } // 
 ?>