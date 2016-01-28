<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
    if ($_POST) {
        $cars_string = implode(', ', $_POST['cars']);
        $sql = '
            INSERT INTO
                `kwiatki`
            VALUES ( NULL,
                "'. $cars_string .'",
                2012-01-01
            )
        ';
        mysql_query($sql) OR die(mysql_error());
    }
?>

<form method="post" action="">
Shop ID: <input type="text" name="shopID"/> - 
<select name="cars[]" multiple="multiple">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="honda">Honda</option>
    <option value="audi">Audi</option>
    <option value="bmw">BMW</option>
</select>
<input type="submit" name="Submit"/>
</form>