<?php
session_start();
if (isset($_SESSION['login_dn']))
{
  echo "Witaj<br>";  
  $login_dn = $_SESSION['login_dn'];
	$cn_dn = $_SESSION['cn_dn'];
	$department_dn = $_SESSION['department_dn'];
	$manager_dn = $_SESSION['manager_dn'];
	$mail_dn = $_SESSION['mail_dn'];
        //echo $login_dn ,'<br>';
        echo $cn_dn ,'(',$login_dn,')', '<br>';
        echo $department_dn ,'<br>';
        echo $manager_dn ,'<br>';
}
else header('Location:l2.php');
?>

