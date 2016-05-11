<?php
  
  class Config
  {
     private $_config = array();
     private $_awaitingLoaders = array();
  
     public function get($option)
     {
       // Jeśli podana opcja istnieje, zwróć jej wartość
       if(isset($this->_config[$option]))
       {
          return $this->_config[$option];
       }
 
      // Opcja nie istnieje, sprawdzamy, czy któraś z oczekujących ładowarek ją ma.
       foreach($this->_awaitingLoaders as $id => $loader)
       {
          $this->_config = array_merge($this->_config, $loader->load());
          unset($this->_awaitingLoaders[$id]);
          if(isset($this->_config[$option]))
          {
             return $this->_config[$option];
          }
       }
       return null;
    } // end get();
 
    public function addLoader(ConfigLoader $loader)
    {
       $this->_awaitingLoaders[] = $loader;
    } // end addLoader();
 } // end Config;
?>
