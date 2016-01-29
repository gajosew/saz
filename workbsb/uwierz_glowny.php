<?php
session_start();
if(isset($_POST['user_name']) && isset($_POST['haslo']))
{
  // je¿eli u¿ytkownik w³aœnie podj¹³ próbê zalogowania
  $user_name = $_POST['user_name'];
  $haslo = $_POST['haslo'];

  $bd_lacz = new mysqli('localhost', 'root', 'wsx@#$', 'hotelspro');

  if (mysqli_connect_errno()) {
    echo 'Połączenie z bazą danych nie powiodło się: '.mysqli_connect_error();
    exit();
  }
  $zapytanie = 'select * from users '
               ."where user_name='$user_name' ";          
  $wynik = $bd_lacz->query($zapytanie);
  while($row = mysqli_fetch_array($wynik))
  { 
   $user_pass=$row["user_pass"]; # tutaj definiujemy komorki ;) 
   $user_name=$row["user_name"]; # $zmienna_u¿ywana_w_skrypcie=$komórka["nazwa_komórki_ze_sql"]; 
   $user_stat=$row["user_stat"];
   $pu=$row["pu"];
    if (($haslo != $user_pass))
   {
   
   
   
   } else
    // je¿eli dane s¹ w bazie zarejestrowanie identyfikatora u¿ytkownika
    $_SESSION['prawid_uzyt'] = $user_name;
	$_SESSION['user_stat'] = $user_stat;
	$_SESSION['puz'] = $pu;
	

	
  }
  $bd_lacz->close();
}
?>
<html>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<body>
<style type="text/css">
<!--
body {
	background-color: #F4DCA8;
}
-->
</style></head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<h1><center>Witaj w HotelIS </center></h1>
<?
  if(isset($_SESSION['prawid_uzyt']))
  {
    echo '<center>Użytkownik zalogowany nazwą: '.$_SESSION['prawid_uzyt']. '<br />';
	echo '<center>Nazwa systemowa: '.$_SESSION['user_stat'].'</center><br />';
    
	echo '<object type="application/x-shockwave-flash" data="button11.swf" width="100" height="40">< <param name="bgcolor" value="#F4DCA8" /><param name="movie" value="button11.swf" /></object>';
	

echo '<object type="application/x-shockwave-flash" data="button7.swf" width="100" height="40">< <param name="bgcolor" value="#F4DCA8" /><param name="movie" value="button7.swf" /></object>';



  }
  else
  {
    if(isset($user_name))
    {
      // je¿eli próba logowania by³a nieudana
      echo '<center>Zalogowanie niemożliwe.Być może użyleś błędnych danych</center><br />';
    }
    else
    {
      // nie by³o próby logowania lub nast¹pi³o wylogowanie
      echo '<center>System wymaga zalogowania</center><br />';
    }

    // tworzenie formularza logowania
    echo '<form method="post" action="uwierz_glowny.php">';
    echo '<table align="center">';
    
	echo '<tr><td>Identyfikator użytkownika:</td>';
    echo '<td><input type="text" name="user_name"></td></tr>';
    echo '<tr><td>Hasło:</td>';
    echo '<td><input type="password" name="haslo"></td></tr>';
    echo '<tr><td colspan="2" align="center">';
    echo '<input type="submit" value="Logowanie"></td></tr>';
    echo '</table></form>';
  }
?>


</body>
</html>
