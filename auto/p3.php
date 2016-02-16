<?php
session_start();
if (isset($_SESSION['login_dn']))
{
  $login_dn = $_SESSION['login_dn'];
	$cn_dn = $_SESSION['cn_dn'];   
        $department_dn = $_SESSION['department_dn'];
}
else header('Location:l2.php');
?>

<?php

if(isset($_POST['skills'])){
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
	$skillsArray = $_POST['skills'];
        $data_koniec = $_POST['data_koniec'];
	// echo $skillsArray; // Echos the "Array" object
	$i = 0;
	foreach ($skillsArray as $key => $value) { 
        $i++;
        echo "Skill $i || Array Key = $key || Value = $value<br />"; 
		$query = "INSERT INTO zlecenia VALUES" .
"(NULL,'$value', '$data_koniec','$data_koniec')";
$result = $conn->query($query);
if (!$result) echo "Instrukcja INSERT noabla: $query<br>" .
$conn->error . "<br><br>";
    }
	exit();
}
?>
<h3>Zlecenie dotyczy</h3>
<form action="product3.php" method="post" name="myform">
   
  <br>
 
<select name="thelist" onChange="combo(this, 'theinput')" onMouseOut="comboInit(this, 'theinput')" >
  <option>SVN</option>
  <option>Zlecenie nadania uprawnien </option>
  <option>Inne</option>
</select>
  <br> <br>
  
  Od:<input type="date" name="data_koniec"  value="<?php echo date('Y-m-d'); ?>"   min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime ("+180 day"));  ?>"/>
  
  Do:<input type="date" name="data_poczatek" value="<?php echo date('Y-m-d', strtotime ("+180 day"));  ?>" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime ("+180 day"));  ?>" />
  <br> <br>
  Dla:
 <?php //pobranie do listy wyboru pracownikow
  require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM usery WHERE departmend = '$department_dn' and  userylogin != '$login_dn';";

$result1 = mysqli_query($conn, $query);

  ?>
  
  <select name="skills[]" size="6" multiple="multiple">
 <option value="<?php echo $login_dn;?>" selected="selected"><?php echo $cn_dn;?></option> //wstawienie nazwiska aktualnie zalogowanego usera
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

      
       <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
  
  
  
   <textarea name="tresc" rows="8" cols="40">Tresc.
  </textarea>
  <br><br>
  <input name="myBtn" type="submit">
</form>