<?php // login.php
$hn = 'localhost';
$db = 'rejestr';
$un = 'root';
$pw = 'qaz123WSX';

  define('SQL_HOST','localhost');
  define('SQL_USER', 'root');
  define('SQL_PASS', 'qaz123WSX');//hasło admin1 było by już ekstrawagancją ;)
  define('SQL_DB', 'rejestr');//tak sobie nazwałem moją bazę
  
  //połączenie
  $conn = mysql_connect(SQL_HOST, SQL_USER, SQL_PASS) or die ("Nie udało sie połączyć z bazą danych MySQL " . mysql_error());
  mysql_select_db(SQL_DB, $conn);
  
  //informacje do poprawnego kodowania
  mysql_query("SET NAMES utf8");
  mysql_query("SET CHARACTER SET utf8");
  mysql_query("SET collation_connection = utf8_general_ci");
?>
