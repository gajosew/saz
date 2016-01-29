<?php //fetchrow.php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM usery";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
$result->data_seek($j);
$row = $result->fetch_array(MYSQLI_ASSOC);
echo 'Autor: ' . $row['useryid'] . '<br>';
echo 'Tytu³: ' . $row['userylogin'] . '<br>';
echo 'Kategoria: ' . $row['userycn'] . '<br>';
echo 'Rok: ' . $row['mail'] . '<br>';
echo 'ISBN: ' . $row['manager'] . '<br><br>';
}
$result->close();
$conn->close();
?>
W tak