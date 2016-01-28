<?php // form1.php
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Nie podano)";
echo <<<_END
<html>
<head>
<meta charset="utf-8">
<title>Test formularza</title>
</head>
<body>
Masz na imie: $name<br>
<form method="post" action="form1.php">
Jak masz na imie?
<input type="text" name="name">
<input type="submit">
</form>
</body>
</html>
_END;
?>