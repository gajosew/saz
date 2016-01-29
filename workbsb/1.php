<?php

// LDAP variables
$ldaphost = "hwbyads01";  // your ldap servers
$ldapport = 389;                 // your ldap server's port number

// Connecting to LDAP
$ldapconn = ldap_connect($ldaphost, $ldapport) 
          or die("Could not connect to $ldaphost");

?>
