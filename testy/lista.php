<?php
// php select option value from database
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

//$hostname = "localhost";
//$username = "root";
//$password = "qaz123WSX";
//$databaseName = "rejestr";
//// connect to mysql database
//$connect = mysqli_connect($hostname, $username, $password, $databaseName);
// mysql select query
$query = "SELECT * FROM `usery`";
// for method 1
$result1 = mysqli_query($conn, $query);
// for method 2
$result2 = mysqli_query($conn, $query);
$options = "";
while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
?>
<!DOCTYPE html>
<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <!--Method One-->

        <select size="6" multiple="multiple">

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[1];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

        </select>
        
        <!-- Method Two -->

        <select size="6" multiple="multiple">
            <?php echo $options;?>
        </select>

    </body>

</html>
