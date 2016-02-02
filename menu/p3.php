<?php
// Written by Adam @ DevelopPHP.com
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
		$query = "INSERT INTO kwiatki VALUES" .
"(NULL,'$value', '$data_koniec')";
$result = $conn->query($query);
if (!$result) echo "Instrukcja INSERT noabla: $query<br>" .
$conn->error . "<br><br>";
    }
	exit();
}
?>
<h3>Multiple Select HTML Form List PHP Parsing Tutorial</h3>
<form action="product3.php" method="post" name="myform">
  What skills do you have? <br>
  (hold "Ctrl" key to select multiple):
  <br><br>
  <input type="date" name="data_koniec"  value="<?php echo date('Y-m-d'); ?>"   min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime ("+180 day"));  ?>"/>
   <input type="date" name="data_pocztek" value="<?php echo date('Y-m-d', strtotime ("+180 day"));  ?>" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime ("+180 day"));  ?>" />
  <select name="skills[]" size="6" multiple="multiple">
      <option value="HTML5">HTML5</option>
      <option value="CSS3">CSS3</option>
      <option value="Javascript">Javascript</option>
      <option value="Actionscript">Actionscript</option>
      <option value="PHP">PHP</option>
      <option value="MySQL">MySQL</option>
      <option value="i cos">i cos</option>
       <option value="cosnowe">cosnowe</option>
  </select>
  <br><br>
  <input name="myBtn" type="submit">
</form>