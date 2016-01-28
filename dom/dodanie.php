<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "INSERT INTO kwiatki VALUES" .
"(NULL,'Frezja', '2015-01-01')";
$result = $conn->query($query);
if (!$result) echo "Instrukcja INSERT nie powiod³a siê: $query<br>" .
$conn->error . "<br><br>";

?>