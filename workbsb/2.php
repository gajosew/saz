<?php
session_start();
	
	$login_dn = $_SESSION['login_dn'];
	$cn_dn = $_SESSION['cn_dn'];
	$department_dn = $_SESSION['department_dn'];
	$manager_dn = $_SESSION['manager_dn'];
	$mail_dn = $_SESSION['mail_dn'];
	
	echo $login_dn;
	echo $cn_dn;
	echo $department_dn;
	echo $manager_dn;
	echo $mail_dn;
	
	?>