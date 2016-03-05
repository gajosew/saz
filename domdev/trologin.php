<?php
session_start();
if (isset($_SESSION['login_dn']))
{
  $login_dn = $_SESSION['login_dn'];
	$cn_dn = $_SESSION['cn_dn'];   
        $department_dn = $_SESSION['department_dn'];
        $mail_dn = $_SESSION['mail_dn'];
        $manager_dn = $_SESSION['manager_dn'];
}
else header('Location:l2.php');
?>

<?php
        require_once "login.php";
?>
<?php
        //musimy wyciągnąć z bazy informacje o ilości postów ogólnie do wyliczenia ilości stron
        //celowo nie kożystamy z SQL_CALC_FOUND_ROWS, bo zależy nam na zabezpieczeniu się przed wś****skimi 
                        
        $query = "SELECT * FROM usery WHERE userylogin = '$login_dn'  ;";
        $result = mysql_query($query) or die (mysql_error());
        
        while($row = mysql_fetch_array($result)){
              
            
            echo $row['userylogin'];
                echo $row['poziom'];
              
                echo "<hr>";
                  $poziom = $row['poziom'];
                  echo $poziom;
                
                $_SESSION['poziom'] = $poziom;
                header('Location:index.php');
        }
?>