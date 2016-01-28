<?php // form1.php
if (isset($_POST['veg'])) $name = $_POST['veg'];
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "INSERT INTO kwiatki VALUES" .
"(NULL,'$name', '2015-01-01')";
$result = $conn->query($query);
if (!$result) echo "Instrukcja INSERT nie powiod³a siê: $query<br>" .
$conn->error . "<br><br>";
else $veg = "(Nie podano)";
echo <<<_END
<html>
<head>
<meta charset="utf-8">
<title>Test formularza</title>
</head>
<body>
Masz na imie: $name<br>
<form method="post" action="form2.php">
Jak masz na imie?
<select name="veg" size="5" multiple>
<option value="Peas">Groszek</option>
<option value="Beans">Fasola</option>
<option value="Carrots">Marchewka</option>
<option value="Cabbage">Kapusta</option>
<option value="Broccoli">Broku³y</option>
</select>
<input type="submit">
</form>
</body>
</html>
_END;
?>

