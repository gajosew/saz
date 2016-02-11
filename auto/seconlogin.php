<?php //seconlogin.php
session_start();
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

     
	 //deklaracja zmiennych z sessji
	$login_dn = $_SESSION['login_dn'];
	$cn_dn = $_SESSION['cn_dn'];
	$department_dn = $_SESSION['department_dn'];
	$manager_dn = $_SESSION['manager_dn'];
	$mail_dn = $_SESSION['mail_dn'];
	
	$query = "INSERT IGNORE INTO usery VALUES" .
"(NULL,'$login_dn', '$cn_dn', '$mail_dn', '$manager_dn', '$department_dn','0')";
$result = $conn->query($query);
header('Location:index.php');
if (!$result) echo "Nie mozna dodac uzytkownika :-( $query<br>" .
$conn->error . "<br><br>";
?>