<?php
  require('./Config.php');
  require('./ConfigLoader.php');
  
  $config = new Config;
  
  // utworz ladowarki wczytujace rozne fragmenty konfiguracji
  $basicConfig = new ConfigLoader;
  $basicConfig->setFilename('./config/basic.ini.php');
 
 $securityConfig = new ConfigLoader;
 $securityConfig->setFilename('./config/security.ini.php');
 
 $layoutConfig = new ConfigLoader;
 $layoutConfig->setFilename('./config/layout.ini.php');
 
 $config->addLoader($basicConfig);
 $config->addLoader($securityConfig);
 $config->addLoader($layoutConfig);
 
 // zaladujmy pare opcji
 echo $config->get('website_name');
 echo $config->get('session_time');
?>
